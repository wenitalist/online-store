<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon20x20.ico">
    <title>Авторизация</title>
</head>
<body>
    <div class='div-authorization'>
        <p>Авторизация</p>
        <form class='form-authorization' method='POST' action='authorization/login'>
            @csrf
            <input class='input-text' type="text" required placeholder="Логин\почта">
            <input class='input-text' type="password" required placeholder="Пароль">
            <input class='input-submit' type="submit" value="Войти">
        </form>
        <a href='/registration'>Создать аккаунт</a>
        <a href='/'>Вернуться на главную</a>
    </div>
</body>
</html>