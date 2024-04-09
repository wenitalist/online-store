<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController
{
    public function showCreateNewProductPage() {
        $suppliers = Supplier::all();

        return view('admin-panel.new-product', ['suppliers' => $suppliers]);
    }

    public function showCreateNewSupplierPage() {
        return view('admin-panel.new-supplier');
    }

    public function createNewProduct() {
        // Сохранение нового товара
    }

    public function createNewSupplier(Request $request): RedirectResponse {
        $request->validate([
            'supplier-name' => 'required|string|unique:suppliers,name',
        ]);

        $supplier = new Supplier();

        $supplier->name = $request->input('supplier-name');
    
        $supplier->save();
    
        return redirect()->route('new-supplier');
    }
}
