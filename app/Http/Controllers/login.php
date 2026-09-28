<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    //
    public function index() {
        return view('login');
    }

    public function logar(Request $request){
        $credentials = $request->validate([
            'email' => 'required | email',
            'password' => 'required'
        ], [
            'email.required' => 'Necessário informar o e-mail',
            'email.email' => 'E-mail no formato invalido',
            'password.required' => 'Necessário informar a senha'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->withErrors([  
                'email' => 'Credencias invalidas'
        ]);
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
