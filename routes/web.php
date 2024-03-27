<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Error404Controller;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'show'])->name('mainPage');

Route::get('/authorization', [AuthController::class, 'showAuthorizationPage']);
Route::get('/registration', [AuthController::class, 'showRegistrationPage']);

Route::post('/authorization/login', [AuthController::class, 'login']);
Route::post('/registration/create-user', [AuthController::class, 'createUser']);

// Route::get('/support', [SupportController::class, 'show']);
// Route::get('/contacts', [ContactsController::class, 'show']);

Route::fallback([Error404Controller::class, 'show']);