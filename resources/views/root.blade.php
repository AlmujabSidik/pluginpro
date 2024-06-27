<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url(asset('site-icon.svg'))}}">

        @spladeHead
        @filamentStyles
        @vite('resources/js/app.js')
    </head>
    <body class="font-sans antialiased">
        @splade

    @filamentScripts
    </body>
</html>
