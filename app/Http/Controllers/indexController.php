<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function additional_deatils()
    {
        return view('frontend.additionalDetails.index');
    }

    public function redirectToHome()
    {
        $userType = auth()->user()->user_type;

        if($userType == 'buyer'){
            return redirect()->route('buyer_index');

        }else if($userType == 'seller'){
            return redirect()->route('index');
        }

    }
}
