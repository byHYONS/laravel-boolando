<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>byHYONS</title>
    @vite('resources/js/app.js')
</head>
    <body>
        {{-- ? includo l'header per tutte le pagini --}}
        @include('shared.header')

            {{-- ? creo segnaposto per la sezione prodotti --}}
            @yield('products')
        
        {{-- ? includo il footer per tutte le pagini --}}
        @include('shared.footer')
    </body>
</html>
