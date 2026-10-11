<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class register extends Controller
{
    //
    public function index() {
        return view('register');
    }

    public function register(RegisterRequest $request){
        $data = $request->only(['email','password', 'name', 'password_confirma']);

        $user = User::create($data);

        Auth::login($user);
        
        $request->session()->regenerate();
        return redirect('/home');
    }
}
