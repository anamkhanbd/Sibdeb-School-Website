<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewCarriculamController extends Controller
{
    public function index(){
        return view('pages/newcarriculam');
    }
}
