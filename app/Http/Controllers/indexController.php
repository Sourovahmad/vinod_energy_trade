<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function additional_deatils()
    {
        return view('frontend.additionalDetails.index');
    }
}
