@extends('index')

@section('title', 'Страница не найдена 404')

@section('content')
    <div class='div-message-error-404'>  
        <h1 class='h1-message-error404'>Страница не найдена 404</h1>
    </div>
    <div class='second-div-message-error-404'>
        <h3 class='h3-message-error404'>Страница с указанным адресом не существует, за дополнительной инфрормацией обратитесь в службу поддержки</h3>
        <p>Почта службы поддержки k-i-r@bk.ru</p>
    </div>
@endsection
