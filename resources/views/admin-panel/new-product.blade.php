@extends('admin-panel.index')

@section('title', 'Добавление товара')

@section('action')
<form action='/admin/new-product/save' method='POST' enctype='multipart/form-data'>
    @csrf
    <div class='div-for-form-elements'>
        <div class='form-inputs-text-div'>
            <input type='text' name='name' placeholder='Название'>
            <input type='text' name='description' placeholder='Описание'>
            <input type='text' name='price' placeholder='Цена'>
            <input type='text' name='quantity' placeholder='Кол-во'>
        </div>
        <div class='form-select-submit-elements'>
            <div class='form-select-images'>
                <select name='supplier' class='new-product-form-select'>
                    <option disabled selected hidden>Поставщик</option> 
                    @foreach ($suppliers as $supplier)
                        <option value={{ $supplier->id }}>{{ $supplier->name }}</option>
                    @endforeach
                </select>
                <select name='category' class='new-product-form-select'>
                    <option disabled selected hidden>Категория</option> 
                    @foreach ($categories as $category)
                        <option value={{ $category->id }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                <input type='file' name='images[]' id='input-images' multiple accept='image/jpeg, image/png'>
            </div>
            <input type='submit' value='Добавить' class='new-product-form-submit'>
        </div>
    </div>
</form>
@endsection