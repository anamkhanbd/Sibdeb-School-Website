<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagingBodyController extends Controller
{
    public function index(){
        return view('/pages/managingbody');
    }
}
