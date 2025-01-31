<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
<div class="content">

    <div>
        <div class="title bolder">
            @yield('title')
        </div>
        <div class="chosen">
            @yield('choose')
        </div>
        <br><br>
        <div class="chosen">
            @yield('back')
        </div>
    </div>
</div>
</body>
</html>


