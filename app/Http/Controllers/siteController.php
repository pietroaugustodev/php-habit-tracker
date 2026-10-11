<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class siteController extends Controller
{
    // 
    public function index() {
        $nome = 'Pietro';
        $habitos = ['Comer', 'Ler', 'Estudar'];

        return view( 
                view: "home", 
                data: ['nome' => $nome, 'habitos' => $habitos]
        );
    }

    public function dashboard(){
        $habits = Auth::user()->habits;
        return view('dashboard', compact('habits'));
    }
}
