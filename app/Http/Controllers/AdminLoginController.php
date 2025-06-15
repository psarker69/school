<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminLoginController extends Controller
{
    public function loginPage()
    {
        return view('frontend.pages.login.login');
    }

    public function loginInfoCheck(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email|max:255|exists:users,email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return Redirect::back()->withErrors('Username or password incorrect')->withInput();

    }

    public function adminLogOut(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('adminlogin');
    }

}
