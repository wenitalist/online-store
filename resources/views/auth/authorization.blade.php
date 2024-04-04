@extends('auth.index')

@section('title', 'Авторизация')

@section('form')
<div class='div-authorization'>
    <p>Авторизация</p>
    <form class='form-authorization' id='form-authorization' method='POST' action='authorization/login'>
        @csrf
        <input class='input-text' type="text" id='login' name='login' required placeholder="Логин">
        <input class='input-text' type="password" id='password' name='password' required placeholder="Пароль">
        <input class='input-submit' type="submit" value="Войти">
    </form>
    <a href='/registration'>Создать аккаунт</a>
    <a href='/'>Вернуться на главную</a>
</div>
<p id='auth-error-message'></p>
@endsection