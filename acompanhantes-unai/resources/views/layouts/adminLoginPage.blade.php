<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Page</title>
    @include('includes.admin.styles')
    @stack('styles')
</head>

<body>

    @yield('conteudo')

    @include('includes.admin.scripts')
    @stack('scripts')
</body>

</html>