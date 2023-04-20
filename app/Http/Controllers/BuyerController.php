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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebuyerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebuyerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(buyer $buyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebuyerRequest  $request
     * @param  \App\Models\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebuyerRequest $request, buyer $buyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(buyer $buyer)
    {
        //
    }
}
