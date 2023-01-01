<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <meta name="description" content="Alchemist Muda Indonesia">
    <meta name="keywords"
        content="alchemist muda indonesia">
    <link rel="shortcut icon" href="/assets/images/logo-2.png" type="image/x-icon" />


    {{-- STYLE --}}
    @stack('prepend-style')
    @include('components.muda-indonesia.style')
    @stack('addon-style')
</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
    <!-- NAVBAR -->
    @include('components.muda-indonesia.navbar')

    <!-- PAGE CONTENT -->
    @yield('content')

    <!-- FOOTER SECTION -->
    @include('components.muda-indonesia.footer')

    <!-- SCRIPTS -->
    @stack('prepend-script')
    @include('components.muda-indonesia.script')
    @stack('addon-script')

</body>
</html>
