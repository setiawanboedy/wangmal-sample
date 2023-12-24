<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Wangmal') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @include('includes.styles')

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">

        <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active">
                    @include('includes.navigation')
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>{{ $page_heading }}</h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>
        </div>

        @stack('modals')

        @livewireScripts
        @include('includes.scripts')
    </body>
</html>
