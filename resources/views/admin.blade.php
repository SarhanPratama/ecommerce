<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | {{ $title }}</title>
    @yield('css')

    @vite(['resources/js/head.js'])


</head>
<body>
    @include('sweetalert::alert')

    @include('admin/layouts/admin-menu')

    <div class="min-h-screen flex flex-col lg:ps-64 w-full">


        @include('admin/layouts/admin-topbar')

        @yield('content')

        @include('admin/layouts/admin-footer')

    </div>

    @include('layouts.shared/footer-scripts')

    @yield('script')

</body>

</html>
