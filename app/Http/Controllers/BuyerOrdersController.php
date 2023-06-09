<?php

namespace App\Http\Controllers;

use App\Models\buyerOrders;
use App\Http\Requests\StorebuyerOrdersRequest;
use App\Http\Requests\UpdatebuyerOrdersRequest;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
    
        $newBuyerOrder =  new buyerOrders;
        $newBuyerOrder->user_id = auth()->user()->id;

        $newBuyerOrder->supply_point_name = $request->supply_point_name;
        $newBuyerOrder->location_of_supply_point = $request->location_of_supply_point;
        $newBuyerOrder->location_of_supply_point = $request->location_of_supply_point;
        $newBuyerOrder->purchase_request_for = $request->purchase_request_for;
        $newBuyerOrder->deadline_offer_recive = $request->deadline_offer_recive;
        $newBuyerOrder->publication_date = $request->publication_date;
        $newBuyerOrder->natural_gas_point_of_distribution_consumtion_1 = $request->natural_gas_point_of_distribution_consumtion_1;
        $newBuyerOrder->natural_gas_tarrif_point_of_consumption_1 = $request->natural_gas_tarrif_point_of_consumption_1;
        $newBuyerOrder->reserve = $request->reserve;
        $newBuyerOrder->consumption_curve_point_1 = $request->consumption_curve_point_1;




        $newBuyerOrder->expected_january = $request->expected_january;
        $newBuyerOrder->expected_february = $request->expected_february;
        $newBuyerOrder->expected_march = $request->expected_march;
        $newBuyerOrder->expected_april = $request->expected_april;
        $newBuyerOrder->expected_may = $request->expected_may;
        $newBuyerOrder->expected_june = $request->expected_june;
        $newBuyerOrder->expected_july = $request->expected_july;
        $newBuyerOrder->expected_august = $request->expected_august;
        $newBuyerOrder->expected_september = $request->expected_september;
        $newBuyerOrder->expected_october = $request->expected_october;
        $newBuyerOrder->expected_november = $request->expected_november;
        $newBuyerOrder->expected_december = $request->expected_december;




        
       $totalExpectedEnergy =  intval($request->expected_january) + intval($request->expected_february) + intval($request->expected_march) + intval($request->expected_april) + intval($request->expected_june) + intval($request->expected_july) + intval($request->expected_august) + intval ($request->expected_september) + intval($request->expected_october) + intval($request->expected_november) + intval($request->expected_december);
       $newBuyerOrder->total_quantity =  $totalExpectedEnergy;
       $newBuyerOrder->annual_energy = $totalExpectedEnergy;


        $newBuyerOrder->contact_term_days = $request->contact_term_days;
        $newBuyerOrder->contact_term_months = $request->contact_term_months;
        $newBuyerOrder->contact_term_year = $request->contact_term_year;
        $newBuyerOrder->start_of_supply = $request->start_of_supply;


        $newBuyerOrder->cuenca_winter_mix = $request->cuenca_winter_mix;
        $newBuyerOrder->winter_mqn = $request->winter_mqn;
        $newBuyerOrder->winter_pto = $request->winter_pto;
        $newBuyerOrder->winter_scr = $request->winter_scr;
        $newBuyerOrder->winter_chu = $request->winter_chu;
        $newBuyerOrder->winter_noa = $request->winter_noa;
        $newBuyerOrder->cuenca_summer_mix = $request->cuenca_summer_mix;
        $newBuyerOrder->summer_mqn = $request->summer_mqn;
        $newBuyerOrder->summer_pto = $request->summer_pto;
        $newBuyerOrder->summer_scr = $request->summer_scr;
        $newBuyerOrder->summer_chu = $request->summer_chu;
        $newBuyerOrder->summer_noa = $request->summer_noa;
        $newBuyerOrder->type_of_supply = $request->type_of_supply;
        $newBuyerOrder->exclusivity = $request->exclusivity;
        $newBuyerOrder->partial_award = $request->partial_award;
        $newBuyerOrder->price = $request->price;
        $newBuyerOrder->price_renegotiation = $request->price_renegotiation;

        $newBuyerOrder->take_or_pay_optional_to_seller = $request->take_or_pay_optional_to_seller;
        $newBuyerOrder->take_or_pay_percentage = $request->take_or_pay_percentage;
        $newBuyerOrder->take_or_pay_price = $request->take_or_pay_price;
        $newBuyerOrder->optional_delivery_to_seller = $request->optional_delivery_to_seller;
        $newBuyerOrder->delivery_or_pay = $request->delivery_or_pay;
        $newBuyerOrder->delivery_or_pay_price = $request->delivery_or_pay_price;
        $newBuyerOrder->payment_term = $request->payment_term;
        $newBuyerOrder->exchange_rate = $request->exchange_rate;
        $newBuyerOrder->default_rates_debts = $request->default_rates_debts;
        $newBuyerOrder->mortage_rate_debts = $request->mortage_rate_debts;
        $newBuyerOrder->auction_commision = $request->auction_commision;
        $newBuyerOrder->bid_maintain_gurantee = $request->bid_maintain_gurantee;
        $newBuyerOrder->priority_given_to_agreement = $request->priority_given_to_agreement;
      
    


        $newBuyerOrder->save();


        // generate Code


        

        $firstThreeLetterOfName = strtoupper(substr(auth()->user()->social_name, 0, 3));

        $lastText = '';
        
        if($request->purchase_request_for == 'ELECTRICITY') {
            $lastText = 'EE';
        }else{
            $lastText = 'NG';
        }

        $newBuyerOrder->code = $firstThreeLetterOfName . $newBuyerOrder->id . $lastText;
        $newBuyerOrder->save();


        return redirect(route('buyer_index'))->withSuccess('Bid order has been created');
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


    public function superadmin_orders_edit_index($id)
    {
        $order = buyerOrders::findOrFail($id);
        
        if($order->purchase_request_for == 'ELECTRICITY'){
            return view('admin.orders.edit_electricity', compact('order'));
        }else{
            return view('admin.orders.edit_natural', compact('order'));
        }
    }


    public function superadmin_orders_edit(Request $request)
    {
        $request->validate([
            'order_hidden_id' => 'required'
        ]);


        $newBuyerOrder = buyerOrders::findOrFail($request->order_hidden_id);

        $newBuyerOrder->supply_point_name = $request->supply_point_name;
        $newBuyerOrder->location_of_supply_point = $request->location_of_supply_point;
        $newBuyerOrder->location_of_supply_point = $request->location_of_supply_point;
        $newBuyerOrder->purchase_request_for = $request->purchase_request_for;
        $newBuyerOrder->deadline_offer_recive = $request->deadline_offer_recive;
        $newBuyerOrder->publication_date = $request->publication_date;
        $newBuyerOrder->natural_gas_point_of_distribution_consumtion_1 = $request->natural_gas_point_of_distribution_consumtion_1;
        $newBuyerOrder->natural_gas_tarrif_point_of_consumption_1 = $request->natural_gas_tarrif_point_of_consumption_1;
        $newBuyerOrder->reserve = $request->reserve;
        $newBuyerOrder->consumption_curve_point_1 = $request->consumption_curve_point_1;
        $newBuyerOrder->priority_given_to_agreement = $request->priority_given_to_agreement;




        $newBuyerOrder->expected_january = $request->expected_january;
        $newBuyerOrder->expected_february = $request->expected_february;
        $newBuyerOrder->expected_march = $request->expected_march;
        $newBuyerOrder->expected_april = $request->expected_april;
        $newBuyerOrder->expected_may = $request->expected_may;
        $newBuyerOrder->expected_june = $request->expected_june;
        $newBuyerOrder->expected_july = $request->expected_july;
        $newBuyerOrder->expected_august = $request->expected_august;
        $newBuyerOrder->expected_september = $request->expected_september;
        $newBuyerOrder->expected_october = $request->expected_october;
        $newBuyerOrder->expected_november = $request->expected_november;
        $newBuyerOrder->expected_december = $request->expected_december;




        
       $totalExpectedEnergy =  intval($request->expected_january) + intval($request->expected_february) + intval($request->expected_march) + intval($request->expected_april) + intval($request->expected_june) + intval($request->expected_july) + intval($request->expected_august) + intval ($request->expected_september) + intval($request->expected_october) + intval($request->expected_november) + intval($request->expected_december);
       $newBuyerOrder->total_quantity =  $totalExpectedEnergy;
       $newBuyerOrder->annual_energy = $totalExpectedEnergy;


        $newBuyerOrder->contact_term_days = $request->contact_term_days;
        $newBuyerOrder->contact_term_months = $request->contact_term_months;
        $newBuyerOrder->contact_term_year = $request->contact_term_year;
        $newBuyerOrder->start_of_supply = $request->start_of_supply;


        $newBuyerOrder->cuenca_winter_mix = $request->cuenca_winter_mix;
        $newBuyerOrder->winter_mqn = $request->winter_mqn;
        $newBuyerOrder->winter_pto = $request->winter_pto;
        $newBuyerOrder->winter_scr = $request->winter_scr;
        $newBuyerOrder->winter_chu = $request->winter_chu;
        $newBuyerOrder->winter_noa = $request->winter_noa;
        $newBuyerOrder->cuenca_summer_mix = $request->cuenca_summer_mix;
        $newBuyerOrder->summer_mqn = $request->summer_mqn;
        $newBuyerOrder->summer_pto = $request->summer_pto;
        $newBuyerOrder->summer_scr = $request->summer_scr;
        $newBuyerOrder->summer_chu = $request->summer_chu;
        $newBuyerOrder->summer_noa = $request->summer_noa;
        $newBuyerOrder->type_of_supply = $request->type_of_supply;
        $newBuyerOrder->exclusivity = $request->exclusivity;
        $newBuyerOrder->partial_award = $request->partial_award;
        $newBuyerOrder->price = $request->price;
        $newBuyerOrder->price_renegotiation = $request->price_renegotiation;

        $newBuyerOrder->take_or_pay_optional_to_seller = $request->take_or_pay_optional_to_seller;
        $newBuyerOrder->take_or_pay_percentage = $request->take_or_pay_percentage;
        $newBuyerOrder->take_or_pay_price = $request->take_or_pay_price;
        $newBuyerOrder->optional_delivery_to_seller = $request->optional_delivery_to_seller;
        $newBuyerOrder->delivery_or_pay = $request->delivery_or_pay;
        $newBuyerOrder->delivery_or_pay_price = $request->delivery_or_pay_price;
        $newBuyerOrder->payment_term = $request->payment_term;
        $newBuyerOrder->exchange_rate = $request->exchange_rate;
        $newBuyerOrder->default_rates_debts = $request->default_rates_debts;
        $newBuyerOrder->mortage_rate_debts = $request->mortage_rate_debts;
        $newBuyerOrder->auction_commision = $request->auction_commision;
        $newBuyerOrder->bid_maintain_gurantee = $request->bid_maintain_gurantee;
      
    


        $newBuyerOrder->save();


        return back()->withSuccess("order has been updated");



    }


    public function superadmin_update_order_status(Request $request)
    {
        $request->validate([
            'order_hidden_id' => 'required'
        ]);

        $order = buyerOrders::findOrFail($request->order_hidden_id);
        $order->status = $request->status;
        $order->save();

        return back()->withSuccess("order status has been updated");

    }

    public function superadmin_delete_order($id)
    {
    
        $order = buyerOrders::findOrFail($id);

        $orderBids = $order->bids;

        foreach ($orderBids as $singleBid) {
           $singleBid->delete();
        }

        $order->delete();

        return back()->withSuccess("order has been deleted");

    }




}
