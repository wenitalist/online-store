<div class='div-menu'>
    <ul class='ul-menu'>
        <li class='li-menu-logo'><a href="/"><img src="logo.png" class='logo-image' alt="Логотип"></a></li>
        <li class='li-menu-link'><a href="/support">Поддержка</a></li>
        <li class='li-menu-link'><a href="/contacts">Контакты</a></li>
        @if(session('status') === 'admin')
            <li class='li-menu-link'><a href="/admin/new-product">Админ-панель</a></li>
        @endif
        @auth
            <li class='li-menu-link'><a href="/logout">Выйти</a></li>
        @else
            <li class='li-menu-link'><a href="/authorization">Войти</a></li>
        @endauth
    </ul>
</div>