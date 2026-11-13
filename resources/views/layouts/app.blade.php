<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Meu Sistema') | Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @include('partials.menu')

    <main class="container mt-4">
        @if (session('sucesso'))
            <x-alerta tipo="success">{{ session('sucesso') }}</x-alerta>
        @endif

        @yield('conteudo')
    </main>

    <footer class="container text-center text-muted my-5">
        <small>&copy; {{ date('Y') }} - Exercício de Blade</small>
    </footer>

    @stack('scripts')

</body>
</html>
