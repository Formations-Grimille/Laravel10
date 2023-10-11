<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm() {
        return view('auth.register');
    }

    public function loginForm() {
        return view('auth.login');
    }

    public function register(Request $request) {
        $user = new User();
        $user->email = $request->get('email');
        $user->name = $request->get('name');
        //Utiliser un mutateur et du coup le mass assignment
        $user->password = bcrypt($request->get('password')); 
        $user->save();

        return redirect()->route('auth.loginForm');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('blog.index');
        } else {
            return redirect()->route('auth.loginForm')
                ->withErrors('Authentication failed');
        }
    }
}
