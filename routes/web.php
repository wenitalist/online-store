<?php

use App\Http\Controllers\Error404Controller;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'show']);

// Route::get('/support', [SupportController::class, 'show']);
// Route::get('/contacts', [ContactsController::class, 'show']);
// Route::get('/login', [LoginController::class, 'show']);

Route::fallback([Error404Controller::class, 'show']);