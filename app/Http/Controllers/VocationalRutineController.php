<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VocationalRutineController extends Controller
{
    public function index(){
        return view('/pages/vocationalrutine');
    }
}
