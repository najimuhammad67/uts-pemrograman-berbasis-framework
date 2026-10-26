<!doctype html>
<html lang="en" data-bs-theme="blue-theme">
<head>
    @include('admin.layout.head')
    @stack('styles')
</head>
<body>

    @yield('content')

    @include('admin.layout.scripts-auth')
    @stack('scripts')
</body>
</html>
