<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function loginPage()
    {
        return view('frontend.pages.login.login');
    }

    public function loginInfoCheck(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        $$credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials, $request->filled('remember')))
        {
            $request->session()->regenerate();
            return redirect()->intended('');
        }

        return back()->withErrors([
            'email' => 'Wrong Credential Found',
        ])->onlyInput('email');

    }

}
