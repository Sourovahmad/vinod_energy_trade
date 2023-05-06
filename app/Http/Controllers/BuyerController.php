<?php

namespace App\Http\Controllers;

use App\Models\buyer;
use App\Http\Requests\StorebuyerRequest;
use App\Http\Requests\UpdatebuyerRequest;
use App\Models\buyerOrders;
use Illuminate\Http\Request;

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

        $ordersOpen = buyerOrders::with(['bids'])->where('user_id', $user->id)->where('status', 'open')->get();
        $ordersAwarded = buyerOrders::with(['bids'])->where('user_id', $user->id)->where('status', 'awarded')->get();
        $ordersUnderAnalysis = buyerOrders::with(['bids'])->where('user_id', $user->id)->where('status', 'under_analysis')->get();
        $ordersDesert = buyerOrders::with(['bids'])->where('user_id', $user->id)->where('status', 'desert')->get();
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

    public function update_status(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'status' => 'required'
        ]);

        $buyerOrder = buyerOrders::findOrFail($request->order_id);
        $buyerOrder->status = $request->status;

        $buyerOrder->save();

        return back()->withSuccess('Bid order has been updated');


    }

    public function destroy(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
        ]);

        $buyerOrder = buyerOrders::findOrFail($request->order_id);
        $buyerOrder->delete();
        return back()->withSuccess('Bid order has been deleted');
    }
}
