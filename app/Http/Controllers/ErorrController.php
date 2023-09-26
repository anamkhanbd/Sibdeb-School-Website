<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErorrController extends Controller
{
    public function index(){
        return view('/pages/erorr');
    }
}
