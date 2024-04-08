@extends('admin-panel.index')

@section('title', 'Добавление товара')

@section('action')
<form action='/admin/new-product/save' method='POST'>
    <div class='div-for-form-elements'>
        <div class='form-inputs-text-div'>
            <input type='text' placeholder='Название'>
            <input type='text' placeholder='Описание'>
            <input type='text' placeholder='Цена'>
            <input type='text' placeholder='Кол-во'>
        </div>
        <div class='form-select-submit-elements'>
            <select name='supplier-id'> {{-- Надо будет получать всех поставщиков из бд и добавлять их --}}
                <option disabled selected hidden>Поставщик</option> 
                <option value='2'>Поставщик 1</option>
                <option value='3'>Поставщик 2</option>
                <option value='4'>Поставщик 3</option>
            </select>
            <input type='submit' value='Добавить'>
        </div>
    </div>
</form>
@endsection