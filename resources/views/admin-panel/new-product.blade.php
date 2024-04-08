@extends('admin-panel.index')

@section('title', 'Добавление товара')

@section('action')
<form action='/admin/new-product/save' method='POST'>
    @csrf
    <div class='div-for-form-elements'>
        <div class='form-inputs-text-div'>
            <input type='text' placeholder='Название'>
            <input type='text' placeholder='Описание'>
            <input type='text' placeholder='Цена'>
            <input type='text' placeholder='Кол-во'>
        </div>
        <div class='form-select-submit-elements'>
            <select name='supplier-id'>
                <option disabled selected hidden>Поставщик</option> 
                @foreach ($suppliers as $supplier)
                    <option value={{ $supplier->id }}>{{ $supplier->name }}</option>
                @endforeach
            </select>
            <input type='submit' value='Добавить'>
        </div>
    </div>
</form>
@endsection