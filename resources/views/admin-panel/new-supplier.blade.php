@extends('admin-panel.index')

@section('title', 'Добавление поставщика')

@section('action')
<form action='/admin/new-supplier/save' method='POST' id='form-new-supplier'>
    @csrf
    <input type='text' name='supplier-name' placeholder='Имя поставщика' required>
    <input type='submit' value='Добавить'>
</form>
<p id='new-supplier-message'></p>
@endsection