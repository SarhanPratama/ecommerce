<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {

        return view('Auth.login');
    }

    public function authenticate(Request $r)
    {
        $request = $r->only('email', 'password');
        if (Auth::attempt($request)) {
            return redirect('');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Email dan Password tidak cocok',
            ]);
        }
    }
    public function logout()
    {

        session()->flush();
        Auth::logout();

        return redirect('login');
    }

    public function viewRegister()
    {

        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|confirmed',
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'role' => 'user',
        ]);
        return redirect('login');
    }
}
