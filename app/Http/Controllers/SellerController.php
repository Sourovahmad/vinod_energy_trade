<?php

namespace App\Http\Controllers;

use App\Models\seller;
use App\Http\Requests\StoresellerRequest;
use App\Http\Requests\UpdatesellerRequest;
use App\Models\buyerOrders;
use App\Models\orderHasBid;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ordersOpen = buyerOrders::where('deadline_offer_recive', '>', now())
        ->where('status', 'open')
        ->orderBy('id', 'desc')
        ->get();


        $ordersAwarded = buyerOrders::where('status', 'awarded')->get();
        $ordersUnderAnalysis = buyerOrders::where('status', 'under_analysis')->get();
        $ordersDesert = buyerOrders::where('status', 'desert')->get();


        $sellerHasBids = orderHasBid::where('user_id', auth()->user()->id)->get();


        return view('seller.index', compact('ordersOpen', 'sellerHasBids','ordersAwarded', 'ordersUnderAnalysis', 'ordersDesert'));
    }

    public function submit_bid(Request $reqeust)
    {
        $reqeust->validate([
            'order_id' => 'required',
            'status' => 'required'
        ]);


        $orderHasBid = null;

        if($reqeust->status == 'update'){
            $orderHasBid = orderHasBid::find($reqeust->bid_id);
        }else{
            $orderHasBid = new orderHasBid;
        }

        $orderHasBid->order_id = $reqeust->order_id;


        $orderHasBid->user_id = auth()->user()->id;
        $orderHasBid->price_january = $reqeust->price_january;
        $orderHasBid->price_february = $reqeust->price_february;
        $orderHasBid->price_march = $reqeust->price_march;
        $orderHasBid->price_april = $reqeust->price_april;
        $orderHasBid->price_may = $reqeust->price_may;
        $orderHasBid->price_june = $reqeust->price_june;
        $orderHasBid->price_july = $reqeust->price_july;

        $orderHasBid->price_august = $reqeust->price_august;
        $orderHasBid->price_september = $reqeust->price_september;
        $orderHasBid->price_october = $reqeust->price_october;
        $orderHasBid->price_november = $reqeust->price_november;
        $orderHasBid->price_december = $reqeust->price_december;
        $orderHasBid->electricity_price = $reqeust->electricity_price;


        if ($reqeust->has('optional_take_or_pay_to_seller')) {
            $orderHasBid->optional_take_or_pay_to_seller = $reqeust->optional_take_or_pay_to_seller;
        }


        
        if ($reqeust->has('optional_delivery_or_pay_to_seller')) {
            $orderHasBid->optional_delivery_or_pay_to_seller = $reqeust->optional_delivery_or_pay_to_seller;
        }


        $orderHasBid->save();

        $mesage = '';

        
        if($reqeust->status == 'update'){
            $mesage = 'Bid has been Updated successfully';
        }else{
            $mesage = 'Bid has been successfully placed';
        }


        return back()->withSuccess($mesage);




    }


}
