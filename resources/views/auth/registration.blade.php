@extends('auth.index')

@section('title', 'Регистрация')

@section('form')
<div class='div-registration'>
    <p>Регистрация</p>
    <form class='form-registration' id='form-registration' method='POST' action='registration/create-user'>
        @csrf
        <input class='input-text' type="text" id='login' name='login' required placeholder="Логин">
        <input class='input-text' type="email" id='email' name='email' required placeholder="Почта">
        <input class='input-text' type="password" id='password' name='password' required placeholder="Пароль">
        <input class='input-submit' type="submit" value="Зарегистрироваться">
    </form>
    <a href='/authorization'>Войти в аккаунт</a>
    <a href='/'>Вернуться на главную</a>
</div>
<p id='auth-error-message'></p>
@endsection