<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}} ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>

      <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="/css/main.css" rel="stylesheet">

</head>
    <body>
        @yield('content')
        
        <footer>
            Copyright 2021 Pizza house
        </footer>
    
    </body>
</html>