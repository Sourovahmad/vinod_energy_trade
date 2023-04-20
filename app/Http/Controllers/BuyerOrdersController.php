<?php

namespace App\Http\Controllers;

use App\Models\buyerOrders;
use App\Http\Requests\StorebuyerOrdersRequest;
use App\Http\Requests\UpdatebuyerOrdersRequest;

class BuyerOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebuyerOrdersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebuyerOrdersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buyerOrders  $buyerOrders
     * @return \Illuminate\Http\Response
     */
    public function show(buyerOrders $buyerOrders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\buyerOrders  $buyerOrders
     * @return \Illuminate\Http\Response
     */
    public function edit(buyerOrders $buyerOrders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebuyerOrdersRequest  $request
     * @param  \App\Models\buyerOrders  $buyerOrders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebuyerOrdersRequest $request, buyerOrders $buyerOrders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buyerOrders  $buyerOrders
     * @return \Illuminate\Http\Response
     */
    public function destroy(buyerOrders $buyerOrders)
    {
        //
    }
}
