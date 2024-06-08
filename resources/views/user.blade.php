<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>GreenCart </title>
    <!-- Theme favicon -->
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="coderthemes" name="author" />
    
    @yield('css')
    @vite(['resources/js/head.js'])
</head>

<body>
    @include('sweetalert::alert')

    @yield('content')

    @include('layouts.shared/footer-scripts')

    @yield('script')

    @include('layouts.shared/theme-mode')
        
</body>

</html>