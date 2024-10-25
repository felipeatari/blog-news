## NOTA:
- Desenvolvi o sistema para gerenciar notícias com Laravel, Livewire e Tailwind CSS.
- Durante o desenvolvimento, rodei a aplicação via Docker com o Sail. Pela praticidade, recomendo rodar dessa forma.
- Caso opte por não rodar via Docker, recomendo fortemente utilizar o PHP 8.2+, pois estou utilizando alguns recursos dessa versão.
- Independentemente da forma como for rodar, é obrigatório ter o Composer instalado.
- Também é necessário ter o npm instalado para compilar o Tailwind CSS.

## Configurações:
- Após baixar o projeto do GitHub, localize o arquivo ".env.example".
- Faça uma cópia e renomeie uma das cópias de "env.example" para ".env".
- Obs.: É importante manter o arquivo ".env.example", pois o ".env" não é commitado.

**Configurar rota e banco de dados, se necessário, no ".env":**
- Para a rota, localize:
```env
APP_URL=http://localhost
APP_PORT=8080
```

---

- Para o banco de dados, localize:
```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```
- Obs.: Se for rodar via Sail (Docker), não é necessário alterar.

## Rodar o projeto:
- Para instalar o Laravel, execute no terminal:
```bash
composer install
```
- Obs.: Isso vai baixar todas as dependências.

---

**Rodar o Laravel:**
- Se for via Docker:
```bash
./vendor/bin/sail up -d
```
- Se não for via Docker:
```bash
php artisan serve
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

**Preenche o banco de dados com dados fake (opicional):**
- Se for via Docker:
```bash
./vendor/bin/sail artisan db:seed
```
- Se não for via Docker:
```bash
php artisan db:seed
```

---

**Tornar o storage publico (importante para acessar as imagens):**
- Se for via Docker:
```bash
./vendor/bin/sail artisan storage:link
```
- Se não for via Docker:
```bash
php artisan storage:link
```

---

**Rodar o Tailwind CSS:**
- Se for via Docker:
```bash
./vendor/bin/sail npm install && ./vendor/bin/sail npm run build
```
- Se não for via Docker:
```bash
npm install && npm run build
```
