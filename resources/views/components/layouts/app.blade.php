<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'YtFilt' }}</title>
    @vite('resources/css/app.css')
    @stack('plyr-js')
    @stack('plyr-css')
    @stack('truncate-css')
    <style>
        /* CSS untuk menyembunyikan scrollbar */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body>
    {{ $slot }}
</body>

</html>
