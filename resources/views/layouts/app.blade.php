<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-background">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ? $title . ' - LayzWash' : 'LayzWash' }}</title>
        @vite('resources/js/app.js')
    </head>
    <body class="h-full">
        @if($header)
            <x-nav.header />
        @endif

        {{ $slot }}
    </body>
</html>
