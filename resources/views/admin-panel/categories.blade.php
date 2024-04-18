@extends('admin-panel.index')

@section('title', 'Категории')

@section('action')
<div class='categories-main-div'>
    <div class='categories-new-category-div'>
        <p>Создать новую категорию</p>
        <form action='/admin/categories/new' method='POST' id='form-new-category'>
            @csrf
            <input type='text' name='category-name' placeholder='Название' required>
            <input type='submit' value='Добавить'>
        </form>
        <p id='new-category-message'></p>
    </div>
    {{-- <div class='categories-del-category-div'>
        <p>Удалить категорию</p>
        <form action='/admin/categories/delete' method='POST' id='form-delete-category'>
            @csrf
            <select>
                <option disabled selected hidden>Категория</option> 
                @foreach ($categories as $category)
                    <option value={{ $category->id }}>{{ $category->name }}</option>
                @endforeach
            </select>
            <input type='submit' value='Удалить'>
        </form>
        <p id='delete-category-message'></p>
    </div> --}}
</div>
@endsection