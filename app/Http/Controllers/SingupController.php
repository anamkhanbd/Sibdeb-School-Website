<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingupController extends Controller
{
    public function index(){
        return view('singup');
    }

    public function singup(Request $request)
    {
        $request->validate(
            [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required | email',
            'password' => 'required',
            'cpassword' => 'required',
             ]
    );
            
    }


}
