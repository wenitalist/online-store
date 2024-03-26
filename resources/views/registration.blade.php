<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon20x20.ico">
    <title>Регистрация</title>
</head>
<body>
    <div class='div-registration'>
        <p>Регистрация</p>
        <form class='form-registration' method='POST' action='registration/new-user'>
            @csrf
            <input class='input-text' type="text" id='login' required placeholder="Логин">
            <input class='input-text' type="email" id='mail' required placeholder="Почта">
            <input class='input-text' type="password" id='password' required placeholder="Пароль">
            <input class='input-submit' type="submit" value="Зарегистрироваться">
        </form>
        <a href='/authorization'>Войти в аккаунт</a>
        <a href='/'>Вернуться на главную</a>
    </div>
</body>
</html>