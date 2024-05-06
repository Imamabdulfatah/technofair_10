<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Register;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/login', [
            "title" => "Login",
            "active" => "login",
            "navbar" => "none",
            "openclose" => Register::all(),
        ]);
    }

    public function authenticate(Request $request,User $user)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials) && $request->password !== "Technofair10_29062023") {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } elseif(Auth::attempt($credentials) && $request->password === "Technofair10_29062023") {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        } else {
            return back()->with('loginError', 'Login failed');
        }
       
    }

    public function logout(Request $request) {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
