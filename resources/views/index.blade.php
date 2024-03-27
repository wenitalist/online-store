<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon20x20.ico">
    <script src='script.js'></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class='main-div'>
        @include('menu')
        @yield('content')
    </div>
    <div class='footer'>
        @include('footer')
    </div>
</body>
</html>