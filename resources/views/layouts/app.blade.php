<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <meta name="description" content="Free Bootstrap 4 Theme by uicookies.com">
    <meta name="keywords"
        content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    {{-- STYLE --}}
    @stack('prepend-style')
    @include('components.style')
    @stack('addon-style')
</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    <!-- NAVBAR -->
    @include('components.navbar')

    <!-- PAGE CONTENT -->
    @yield('content')


    <!-- FOOTER SECTION -->
    @include('components.footer')


    <!-- SCRIPTS -->
    @stack('prepend-script')
    @include('components.script')
    @stack('addon-script')

</body>
</html>
