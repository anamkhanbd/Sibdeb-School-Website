<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Admission;

class AdmissionController extends Controller
{
    public function index()
    {
        return view('pages/admission');
    }

    public function store(Request $request)
    {
        $admitiondata = new admitiondata;
        $admitiondata-> bn_name = $request ['bn_name'];
        $admitiondata -> en_name = $request ['en_name'];
        $admitiondata -> phone_number = $request ['phone_number'];
        $admitiondata -> gender = $request ['gender'];
        $admitiondata -> admission_class = $request ['admisson_class'];
        $admitiondata -> photo = $request ['photo'];
        $admitiondata -> save();
    }
}
