<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Error404Controller;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'show']);

Route::get('/authorization', [AuthController::class, 'showAuthorizationPage']);
Route::get('/registration', [AuthController::class, 'showRegistrationPage']);

Route::post('/authorization/login', [AuthController::class, 'login']);
Route::post('/registration/new-user', [AuthController::class, 'newUser']);

// Route::get('/support', [SupportController::class, 'show']);
// Route::get('/contacts', [ContactsController::class, 'show']);
// Route::get('/login', [LoginController::class, 'show']);

Route::fallback([Error404Controller::class, 'show']);