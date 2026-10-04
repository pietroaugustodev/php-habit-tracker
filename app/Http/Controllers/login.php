<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    //
    public function index() {
        return view('login');
    }
}
