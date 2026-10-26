<!DOCTYPE html>
<html lang="en">
<head>
    @include('landing.layout.head')
    @stack('styles')
</head>
<body>
    <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

    @include('landing.layout.header')

    @yield('content')

    @include('landing.layout.footer')
    @include('landing.layout.scripts')
</body>
</html>
