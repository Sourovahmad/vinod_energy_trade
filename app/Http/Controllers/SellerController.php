<?php

namespace App\Http\Controllers;

use App\Models\seller;
use App\Http\Requests\StoresellerRequest;
use App\Http\Requests\UpdatesellerRequest;
use App\Models\buyerOrders;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ordersOpen = buyerOrders::where('deadline_offer_recive', '>', now())->where('status', 'open')->get();
        return view('seller.index', compact('ordersOpen'));
    }

}
