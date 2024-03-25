<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon20x20.ico">
    <title>@yield('title')</title>
</head>
<body>
    <div class='main-div'>
        <div class='div-menu'>
            <ul class='ul-menu'>
                <li class='li-menu-logo'><a href="/"><img src="logo.png" class='logo-image' alt="Логотип"></a></li>
                <li class='li-menu-link'><a href="/support">Поддержка</a></li>
                <li class='li-menu-link'><a href="/contacts">Контакты</a></li>
                <li class='li-menu-link'><a href="/login">Войти</a></li>
            </ul>
        </div>
        @yield('content')
    </div>
    <div class='footer'>
        <div class='footer-menus'>
            <ul class='footer-ul-contacts'>Контакты:
                <li>8-800-555-35-35</li>
                <li>k-i-r@bk.ru</li>
                <li>wenitalist@gmail.com</li>
            </ul>
            <ul class='footer-ul-links'>Ссылки:
                <li><a href='https://github.com/wenitalist'>GitHub</a></li>
                <li><a href='https://steamcommunity.com/id/reejulya/'>Steam</a></li>
                <li><a href='https://vk.com/reejulya'>Vk</a></li>
            </ul>
        </div>
        <div class='footer-content'>
            <a href="/"><img src="logo.png" class='footer-logo-image' alt="Логотип"></a>
            <p class='footer-text'>Сайт "Online-store" созданный с помощью laravel, blade, php, html, css, javascript, sql</p>
        </div>
    </div>
</body>
</html>