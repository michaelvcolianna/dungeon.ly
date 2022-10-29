<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{ asset('favicon.svg') }}">

        @if(Request::routeIs('welcome'))
            <link rel="canonical" href="{{ $url }}">
            <meta name="title" content="{{ $title }}" />
            <meta name="description" content="{{ $description }}" />
            <meta name="image" content="{{ $image }}" />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="{{ $url }}" />
            <meta property="og:title" content="{{ $title }}" />
            <meta property="og:description" content="{{ $description }}" />
            <meta property="og:image" content="{{ $image }}" />
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:url" content="{{ $url }}" />
            <meta name="twitter:title" content="{{ $title }}" />
            <meta name="twitter:description" content="{{ $description }}" />
            <meta name="twitter:image" content="{{ $image }}" />
        @endif

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=alegreya:400,400i,600,600i,700,700i" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900">
            {{ $slot }}
        </div>
    </body>
</html>
