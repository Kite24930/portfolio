@props(['title' => null, 'description' => null, 'structuredData' => null, 'keywords' => null, 'css' => null, 'header' => true, 'footer' => true])
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('storage/icon.png') }}">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-status-bar-style" content="black-translucent">

    @if($title)
        <title>{{ $title }} | {{ config('app.name', 'Laravel') }}</title>
    @else
        <title>{{ config('app.name', 'Laravel') }}</title>
    @endif

    @if($description)
        <meta name="description" content="{{ $description }}">

        <!-- Open Graph -->
        <meta property="og:title" content="{{ $title ?? config('app.name', 'Laravel') }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('storage/icon.png') }}">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">
        <meta property="og:locale" content="ja_JP">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@Twitter">
        <meta name="twitter:creator" content="@Twitter">
        <meta name="twitter:title" content="{{ $title ?? config('app.name', 'Laravel') }}">
        <meta name="twitter:description" content="{{ $description }}">
        <meta name="twitter:image" content="{{ asset('storage/icon.png') }}">
    @endif

    @if($keywords)
        <meta name="keywords" content="{{ $keywords }}">
    @endif

    @if($structuredData)
        <script type="application/ld+json">
            {!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
    @endif

    <!-- Reset CSS -->
    <link rel="stylesheet" href="https://unpkg.com/sanitize.css">

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if($css)
        @vite(['resources/css/'.$css])
    @endif
</head>
<body class="md:pt-28 pt-20">
<canvas id="background" class="fixed top-0 bottom-0 left-0 right-0 w-full h-full bg-primary -z-50"></canvas>
@if($header)
    <x-header />
@endif
{{ $slot }}
@if($footer)
    <x-footer />
@endif
@livewireScripts
</body>
</html>
