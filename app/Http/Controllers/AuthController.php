<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AuthController
{
    public function showAuthorizationPage(): View {
        return view('auth.authorization');
    }

    public function showRegistrationPage(): View {
        return view('auth.registration');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'login' => 'required|string|max:30',
            'password' => 'required|string|min:6|max:20',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            /** @var User|null $user */
            $user = Auth::user();
            if ($user->isAdmin()) {
                $request->session()->put('status', 'admin');
            }
            
            return redirect()->route('main-page');
        } else {
            return response()->json(['error' => 'Incorrect login or password'], 401);
        }
    }

    public function logout(Request $request): RedirectResponse {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('main-page');
    }

    public function createUser(Request $request): RedirectResponse {
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
