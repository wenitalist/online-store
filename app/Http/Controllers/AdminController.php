<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController
{
    public function showCreateNewProductPage() {
        $suppliers = Supplier::all();
        $categories = Category::all();

        return view('admin-panel.new-product', [
            'suppliers' => $suppliers,
            'categories' => $categories
        ]);
    }

    public function showCreateNewSupplierPage() {
        return view('admin-panel.new-supplier');
    }

    public function showCategoriesPage() {
        $categories = Category::all();

        return view('admin-panel.categories', ['categories' => $categories]);
    }

    public function createNewProduct(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'description' => 'string|nullable',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'supplier' => 'required|string',
            'category' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png|max:3072',
            'images' => 'array|max:5',
        ]);

        $product = new Product();

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->supplier_id = $request->input('supplier');

        $product->save();

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->hashName();

                Storage::putFileAs('public/images', $image, $filename);

                $img = new Image();
                $img->name = $filename;
                $img->product_id = $product->id;
                $img->save();
            }
        }

        $product->categories()->attach($request->input('category'));

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

    public function createNewCategory(Request $request): RedirectResponse {
        $request->validate([
            'category-name' => 'required|string|unique:categories,name',
        ]);

        $category = new Category();

        $category->name = $request->input('category-name');

        $category->save();

        return redirect()->route('categories');
    }
}
