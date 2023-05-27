<?php

namespace App\Http\Controllers;

use App\Models\orderHasBid;
use Illuminate\Http\Request;

class OrderHasBidController extends Controller
{
    public function superadmin_update_bid(Request $request)
    {
        $request->validate([
            'bid_id' => 'required',
        ]);


    


        $orderHasBid = orderHasBid::find($request->bid_id);

        
      
       if (!is_null($request->price_january)) {
        $orderHasBid->price_january = $request->price_january;
       }

       if (!is_null($request->price_february)) {
        $orderHasBid->price_february = $request->price_february;

       }

       if (!is_null($request->price_march)) {
        $orderHasBid->price_march = $request->price_march;

       }


       if (!is_null($request->price_april)) {
        $orderHasBid->price_april = $request->price_april;

       }


       if (!is_null($request->price_may)) {
        $orderHasBid->price_may = $request->price_may;

       }

       
       if (!is_null($request->price_june)) {
        $orderHasBid->price_june = $request->price_june;

       }


       if (!is_null($request->price_july)) {
        $orderHasBid->price_july = $request->price_july;

       }


       
       if (!is_null($request->price_august)) {
        $orderHasBid->price_august = $request->price_august;

       }

       if (!is_null($request->price_september)) {
        $orderHasBid->price_september = $request->price_september;

       }


                
       if (!is_null($request->price_october)) {
        $orderHasBid->price_october = $request->price_october;

       }


       
                
       if (!is_null($request->price_november)) {
        $orderHasBid->price_november = $request->price_november;

       }


            
                
       if (!is_null($request->price_december)) {
        $orderHasBid->price_december = $request->price_december;

       }


        if (!is_null($request->optional_take_or_pay_to_seller)) {
            $orderHasBid->optional_take_or_pay_to_seller = $request->optional_take_or_pay_to_seller;
        }

     
        if (!is_null($request->optional_delivery_or_pay_to_seller)) {

            $orderHasBid->optional_delivery_or_pay_to_seller = $request->optional_delivery_or_pay_to_seller;

        }
        


        $orderHasBid->save();

        return back()->withSuccess("Bid has been updated");
    }
}
