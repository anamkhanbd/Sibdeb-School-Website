<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeadMasterController extends Controller
{
    public function index(){
        return view('/pages/headmaster');
    }
}
