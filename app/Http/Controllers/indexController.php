<?php

namespace App\Http\Controllers;

use App\Models\buyerOrders;
use Illuminate\Http\Request;

class indexController extends Controller
{

    public function index()
    {


        // get the deadline orders

        $unmodified_orders = buyerOrders::where('status','open')
        ->where('deadline_offer_recive', '<', now())->get();

        foreach ($unmodified_orders as $orderSingle) {
            $orderSingle->status = 'under_analysis';
            $orderSingle->save();
        }

        // update the orders

        return view('welcome');
    }
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
            return redirect()->route('seller_index');
        }

    }
}
