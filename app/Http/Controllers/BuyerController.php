<?php

namespace App\Http\Controllers;

use App\Models\buyer;
use App\Http\Requests\StorebuyerRequest;
use App\Http\Requests\UpdatebuyerRequest;
use App\Models\buyerOrders;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $ordersOpen = buyerOrders::where('user_id', $user->id)->where('status', 'open')->get();
        $ordersAwarded = buyerOrders::where('user_id', $user->id)->where('status', 'awarded')->get();
        $ordersUnderAnalysis = buyerOrders::where('user_id', $user->id)->where('status', 'under_analysis')->get();
        $ordersDesert = buyerOrders::where('user_id', $user->id)->where('status', 'desert')->get();

        return view('buyer.index',compact('ordersOpen', 'ordersAwarded', 'ordersUnderAnalysis', 'ordersDesert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buyer.add');
    }

    public function add_electricity()
    {
        return view('buyer.add_electricity');
    }
}
