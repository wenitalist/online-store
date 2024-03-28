<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Error404Controller;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'show'])->name('main-page');

Route::middleware('auth')->group(function () { 
    Route::get('/logout', [AuthController::class, 'logout']);
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