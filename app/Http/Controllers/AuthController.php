<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {

        return view('Auth.login');
    }

    public function authenticate(Request $r) {
        $request = $r->only('email', 'password');
        if (Auth::attempt($request)) {
            return redirect('');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Email dan Password tidak cocok',
            ]);
        }
    }
    public function logout() {

        session()->flush();
        Auth::logout();

        return redirect('login');
    } 
}
