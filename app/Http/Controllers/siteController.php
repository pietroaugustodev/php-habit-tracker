<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('dashboard');
    }
}
