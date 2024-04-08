<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="favicon20x20.ico">
    {{-- <script src='js/admin-panel-script.js'></script> --}}
    <title>@yield('title')</title>
</head>
<body>
    <div class='admin-main-div'>
        <div class='admin-info'>
            <p>Админ панель</p>
            <a href='/'>Вернуться на главную</a>
        </div>
        <div class='admin-menu-action-section'>
            <div class='admin-menu'>
                <a href='/admin/new-product' class='admin-menu-link'>Добавить товар</a>
                <a href='#' class='admin-menu-link'>Редактировать товар</a>
                <a href='/admin/new-supplier' class='admin-menu-link'>Добавить поставщика</a>
                <a href='/admin/categories' class='admin-menu-link'>Категории</a>
            </div>
            <div class='action-section'>
                @yield('action')
            </div>
        </div>
    </div>
</body>
</html>