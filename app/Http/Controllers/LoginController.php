<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $role = Auth::user()->role;

            switch ($role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'seller':
                    return redirect()->route('seller.dashboard');
                case 'buyer':
                    return redirect()->route('buyer.dashboard');
                default:
                    return redirect('/');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

}
