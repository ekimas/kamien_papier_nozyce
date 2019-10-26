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
    <style>

    </style>
</head>
<body>
<div class="content ">
        <div class="title bolder">
            @yield('title')
        </div>
        <div>
            @yield('back')
        </div>
        <div>
            <table class="block-center table-margin-top">
                <tr>
                    <td class="bolder tr-history">WYNIK</td>
                    <td class="bolder tr-history">CZAS</td>
                </tr>
                <tr>
                    <td>@yield('result')</td>
                    <td>@yield('time')</td>
                </tr>

            </table>
        </div>

</div>
</body>
</html>

