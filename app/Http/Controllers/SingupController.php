<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingupController extends Controller
{
    public function index(){
        return view('singup');
    }
}
