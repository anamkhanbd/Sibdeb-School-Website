<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenaralRutineController extends Controller
{
    public function index (){
        return view('pages/genaralrutine');
    }
}
