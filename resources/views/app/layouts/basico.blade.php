<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Super Gestao - @yield('titulo')</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="{{ asset('css/estilo_base.css') }}">
        </head>

    <body>
        @include('app.layouts.partials.topo')
        @yield('conteudo')
    </body>
</html>