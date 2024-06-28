<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!-- Preload critical CSS -->
    <link rel="preload" href="{{ asset('path/to/critical.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('path/to/critical.css') }}">
    </noscript>

    @spladeHead
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-slate-100">
    @splade

    <!-- Defer non-critical CSS -->
    <link rel="preload" href="{{ asset('path/to/non-critical.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('path/to/non-critical.css') }}">
    </noscript>

    @filamentScripts

    @if (request()->routeIs('order.verification'))
        <script type="text/javascript">
            window.$crisp = [];
            window.CRISP_WEBSITE_ID = "76133ea1-326f-457e-98d6-c23b480aef53";
            (function() {
                d = document;
                s = d.createElement("script");
                s.src = "https://client.crisp.chat/l.js";
                s.async = 1;
                d.getElementsByTagName("head")[0].appendChild(s);
            })();
        </script>
    @endif

    <script defer src="https://unpkg.com/alpinejs@latest/dist/cdn.min.js"></script>

    <!-- Filament styles moved to end of body -->
    @filamentStyles
</body>

</html>
