<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController
{
    public function showCreateNewProductPage() {
        return view('admin-panel.new-product');
    }

    public function createNewProduct() {
        // Сохранение нового товара
    }
}
