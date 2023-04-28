<?php

namespace App\Http\Controllers;

use App\Models\orderHasBid;
use App\Http\Requests\StoreorderHasBidRequest;
use App\Http\Requests\UpdateorderHasBidRequest;

class OrderHasBidController extends Controller
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
     * @param  \App\Http\Requests\StoreorderHasBidRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderHasBidRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orderHasBid  $orderHasBid
     * @return \Illuminate\Http\Response
     */
    public function show(orderHasBid $orderHasBid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orderHasBid  $orderHasBid
     * @return \Illuminate\Http\Response
     */
    public function edit(orderHasBid $orderHasBid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderHasBidRequest  $request
     * @param  \App\Models\orderHasBid  $orderHasBid
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderHasBidRequest $request, orderHasBid $orderHasBid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orderHasBid  $orderHasBid
     * @return \Illuminate\Http\Response
     */
    public function destroy(orderHasBid $orderHasBid)
    {
        //
    }
}
