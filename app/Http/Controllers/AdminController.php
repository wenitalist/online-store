<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function createNewProduct(Request $request) {
        $request->validate([
            'name' => 'string',
            'description' => 'string|nullable',
            'price' => 'integer',
            'quantity' => 'integer',
            'supplier' => 'string',
        ]);

        $product = new Product();

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->supplier_id = $request->input('supplier');

        $product->save();

        return redirect()->route('new-product');
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
