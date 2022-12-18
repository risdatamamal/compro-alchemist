<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME', 'Laravel') }}</title>

    {{-- STYLE --}}
    @stack('prepend-style')
    @include('components.auth.style')
    @stack('addon-style')
</head>

<body>
    <div id="app">
        <!-- NAVBAR -->
        @include('components.auth.navbar')

        <main class="py-5">
            @yield('content')
        </main>
    </div>
</body>

</html>
