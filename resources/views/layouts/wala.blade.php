<!DOCTYPE html>
<html lang="en">
    <head><title>@yield('title')</title></head>
            @yield('content')
    <script src="{{ asset('js/sweetalert.min.js') }}"></script> 
    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
</html>