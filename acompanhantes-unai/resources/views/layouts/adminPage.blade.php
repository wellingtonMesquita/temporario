<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    @include('includes.admin.styles')
    @stack('styles')
</head>
<body>
<div class="container-scroller">
    @include('includes.admin.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('includes.admin.sidebar')
        @yield('conteudo')
    </div>
    @include('includes.admin.footer')
</div>
@include('includes.admin.scripts')
@stack('scripts')
</body>
</html>
