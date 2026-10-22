<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class siteController extends Controller
{
    // 
    public function index() {
        $nome = 'Pietro';

        return view("home");
    }

    public function dashboard(){
        $habits = Auth::user()->habits;
        return view('dashboard', compact('habits'));
    }
}
