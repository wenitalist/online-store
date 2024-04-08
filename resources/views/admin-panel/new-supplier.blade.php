@extends('admin-panel.index')

@section('title', 'Добавление поставщика')

@section('action')
<form action='/admin/new-supplier/save' method='POST'>
    @csrf
    <input type='text' name='supplier-name' placeholder='Имя поставщика'>
    <input type='submit' value='Добавить'>
</form>
@endsection