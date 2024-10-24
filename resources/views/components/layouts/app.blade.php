<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-100">
        <header class="bg-blue-800 w-full h-[60px] fixed flex items-center justify-center">
            <nav class="w-[200px] text-white font-bold flex items-center justify-evenly">
                <a href="/" wire:navigate>Listar</a>
                <a href="/criar" wire:navigate>Criar</a>
            </nav>
        </header>

        {{ $slot }}
    </body>
</html>
