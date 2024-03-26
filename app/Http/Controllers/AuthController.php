<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController
{
    public function showAuthorizationPage(): View {
        return view('authorization');
    }

    public function showRegistrationPage(): View {
        return view('registration');
    }

    public function login() {
        
    }

    public function newUser() {

    }
}
