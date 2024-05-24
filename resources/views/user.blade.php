<!DOCTYPE html>
<html lang="en">

<head>
    {{-- @include('layouts.shared/title-meta') --}}
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