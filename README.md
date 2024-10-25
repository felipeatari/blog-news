## NOTA:
- Desenvolvi o sistema para gerenciar as noticias com Laravel, Livewere e Tailwind CSS.
- No processo de desenvolvimento rodei a aplicação via Docker com o Sail. Pela praticidade recomendo rodar dessa forma.
- Caso não optar por rodar via Docker, recomendo fortemente utilizar o PHP 8.2+, pois estou utilizando alguns recursos dessa versão.
- Independente da forma que for rodar, é obrigatório ter o composer instalado.
- Também necessário ter o npm instalado para buildar o Tailwind CSS.

## Configurações:
- Após baixar o projeto do Github, localize o arquivo ".env.php.example".
- Depois faça uma cópia dele e renomeie umas das cópias de "env.php.example" para "env.php".
- Obs.: Importante manter um arquivo ".env.php.example", pois o ".env" não é commitado.

**Configurar rota e bando de dados se necessário no ".env":**
-  Para a rota localize:
```env
APP_URL=http://localhost
APP_PORT=8080
```

---

- Para o banco de dados localize:
```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=Sail
DB_PASSWORD=password
```
- Obs.: Se for rodar via Sail (Docker) não precisa alterar.

## Rodar o projeto:
- Para instalar o Laravel, no terminal execute:
```bash
composer install
```
- Obs.: Vai baixar todas as dependencias.

---

**Rodar o Laravel:**
- Se for via Docker:
```bash
./vendor/bin/sail up -d
```
- Se não for via Docker:
```bash
php server
```

---

**Rodar as migrations:**
- Se for via Docker:
```bash
./vendor/bin/sail artisan migrate
```
- Se não for via Docker:
```bash
php artisan migrate
```

---

**Rodar o Tailwind CSS:**
- Se for via Docker:
```bash
./vendor/bin/sail npm install && ./vendor/bin/sail npm run build
```
- Se não for via Docker:
```bash
./vendor/bin/sail npm install && ./vendor/bin/sail npm run build
```
