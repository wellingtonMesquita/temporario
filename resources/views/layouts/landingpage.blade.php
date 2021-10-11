<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Acompanhantes Unai</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @include('includes.landingpage.styles')
    @stack('styles')
</head>

<body id="inicio" class="my-background-color">
    @include('includes.landingpage.loader')
    @include('includes.landingpage.header')
    @yield('conteudo')
    @include('includes.landingpage.footer')
    @include('includes.landingpage.scripts')
    @stack('scripts')
</body>

</html>