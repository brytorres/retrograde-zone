<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

        <title>Retrograde Zone - Page Not Found</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

        <div id="app">
            <navbar></navbar>
            
            <div class="error-404">
              <h1>Oops... Looks like you made a wrong turn.</h1>
              {{--  <img src="{{ asset('img/404.png') }}" alt="">  --}}
              
            </div>
            
            <footeroonie></footeroonie>
        </div>
        
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
