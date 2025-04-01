<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View {
        return view('pages.client.login');
    }

    public function login_post(Request $request) {
        $isAuth = Auth::attempt($request->only('email', 'password'), $request->rememberMe);

        if (!$isAuth) {
            return redirect('/login')->with('error', 'Invalid login credentials');
        }

        return redirect()->intended('/');
    }

    public function register(): View {
        return view('pages.client.register')
            ->with('email')
            ->with('firstName')
            ->with('lastName');
    }

    public function register_post(Request $request) {
        $model = $request->all();
        $model['name'] = "$request->firstName $request->lastName";
        $user = User::create($model);
        return redirect('/login')->with('success', 'Registration successful! Please log in.');;
    }
}
