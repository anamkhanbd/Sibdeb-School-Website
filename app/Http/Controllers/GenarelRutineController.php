<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenarelRutineController extends Controller
{
    public function index(){
        return view('/pages/genaralrutine');
    }
}
