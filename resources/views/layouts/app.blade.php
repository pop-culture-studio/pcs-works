<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="PCS開発チームへの仕事の依頼はこちらから">

        <meta name="google-site-verification" content="bzkYKVqyoJK4b_T192FRbMFaUbRf7hy_ShWQJSLFHFQ">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <meta name="twitter:card" content="summary">
        <meta name="twitter:creator" content="@PCS_miraizu">
        <meta name="twitter:site" content="@PCS_miraizu">
        <meta property="og:title" content="{{ config('app.name', 'Laravel') }}">
        <meta property="og:description" content="PCS開発チームへの仕事の依頼はこちらから">
        <meta property="og:image" content="{{ asset('/images/card.jpg') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;600;700;800;900&display=swap">

        {{-- @livewireStyles --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        {{-- <x-jet-banner /> --}}

        <div class="min-h-screen bg-gray-100">
            {{-- @livewire('navigation-menu') --}}

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        {{-- @livewireScripts --}}
    </body>
</html>
