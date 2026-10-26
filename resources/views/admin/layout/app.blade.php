<!doctype html>
<html lang="en" data-bs-theme="blue-theme">
<head>
    @include('admin.layout.head')
    @stack('styles')
</head>
<body>

    @include('admin.layout.header')
    @include('admin.layout.sidebar')

    <main class="main-wrapper">
        @yield('content')
    </main>

    @include('admin.layout.overlay')
    @include('admin.layout.footer')
    @include('admin.layout.offcanvas')

    @include('admin.layout.scripts')
    @stack('scripts')
</body>
</html>
