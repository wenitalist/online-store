<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Error404Controller;
use App\Http\Controllers\MainController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'show'])->name('main-page');

Route::middleware('auth')->group(function () { 
    Route::get('/logout', [AuthController::class, 'logout']);

    //Route::get('/account/options', [AccountController::class, 'showOptionsPage'])->name('options-page');
    //Route::get('/account/basket', [AccountController::class, 'showBasketPage'])->name('basket-page');

    Route::middleware([IsAdmin::class])->group(function () {
        Route::get('/admin/new-product', [AdminController::class, 'showCreateNewProductPage'])->name('new-product');
        //Route::get('/admin/del-product', [AdminController::class])->name('del-product');
        //Route::get('/admin/edit-product', [AdminController::class])->name('edit-product');

        Route::get('/admin/new-supplier', [AdminController::class, 'showCreateNewSupplierPage'])->name('new-supplier');
        Route::get('/admin/categories', [AdminController::class, 'showCategoriesPage'])->name('categories');

        Route::post('/admin/new-product/save', [AdminController::class, 'createNewProduct']);
        //Route::get('/admin/del-product/del', [AdminController::class]);
        //Route::get('/admin/edit-product/save', [AdminController::class]);

        Route::post('/admin/new-supplier/save', [AdminController::class, 'createNewSupplier']);
        Route::post('/admin/categories/new', [AdminController::class, 'createNewCategory']);
    });
});

Route::middleware('guest')->group(function () { 
    Route::get('/authorization', [AuthController::class, 'showAuthorizationPage'])->name('authorization-page');
    Route::get('/registration', [AuthController::class, 'showRegistrationPage'])->name('registration-page');

    Route::post('/authorization/login', [AuthController::class, 'login']);
    Route::post('/registration/create-user', [AuthController::class, 'createUser']);
});

// Route::get('/support', [SupportController::class, 'show']);
// Route::get('/contacts', [ContactsController::class, 'show']);

Route::fallback([Error404Controller::class, 'show']);