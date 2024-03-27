<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function createUser(Request $request) {

        $request->validate([
            'login' => 'required|string|unique:users|max:15',
            'email' => 'required|email|unique:users|max:30',
            'password' => 'required|string|min:6|max:20',
        ]);

        $newModelUser = new User();

        $newModelUser->login = $request->input('login');
        $newModelUser->email = $request->input('email');
        $newModelUser->password = $request->input('password');

        $newModelUser->save();

        return redirect()->route('authorization-page');
    }
}
