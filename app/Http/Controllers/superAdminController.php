<?php

namespace App\Http\Controllers;

use App\Models\buyerOrders;
use App\Models\orderHasBid;
use App\Models\User;
use Illuminate\Http\Request;

class superAdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function all_buyers()
    {
        $users = User::where('user_type', 'buyer')->orderBy('id', 'desc')->get();
        $user_type = 'Buyers';
        return view('admin.buyer.index', compact('users', 'user_type'));
    }

    public function all_sellers()
    {
        $users = User::where('user_type', 'seller')->orderBy('id', 'desc')->get();
        $user_type = 'Sellers';
        return view('admin.buyer.index', compact('users', 'user_type'));
    }

    public function admin_user_destroy($id)
    {
        $selectedUser = User::findOrFail($id);
        $selectedUser->delete();
        return back()->withSuccess('User Deleted');

    }

    public function admin_update_user(Request $request)
    {
        $request->validate([
            'user_id' => 'required'
        ]);

        $user = User::findOrFail($request->user_id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->save();
        return back()->withSuccess('User Updated');

    }



    public function super_admin_user_update_additional_info(Request $request)
    {

        $request->validate([
            'person_id' => 'required',
            'social_name' => 'required',
            'company_suit' => 'required',
            'role' => 'required',
            'user_id' => 'required'
        ]);
 
        $user = User::find($request->user_id);

        $user->person_id = $request->person_id;
        $user->social_name = $request->social_name;
        $user->company_suit = $request->company_suit;
        $user->role = $request->role;



        if (!is_null($request->cuit_proof)) {
       
                // saving suitproof file
                $suitproofFile = $request->file('cuit_proof');
                $suitproofImgname = $suitproofFile->getClientOriginalName();
                $uniqueNameForSuitFile = time().$suitproofImgname;
                $suitproofFile->move('images', $uniqueNameForSuitFile);

                $user->cuit_proof = $uniqueNameForSuitFile;
        }




        
        if (!is_null($request->logo)) {
        //saving logo
        $logoFile = $request->file('logo');
        $logoFileName = $logoFile->getClientOriginalName();
        $uniqueLogoNAme = time().$logoFileName;
        $logoFile->move('images', $uniqueLogoNAme);

        $user->profile_photo_path = $uniqueLogoNAme;
        }


        // last balance


        
        
        if (!is_null($request->last_balance)) {

        $lastBalanceFile = $request->file('last_balance');
        $lastBalanceFileNAme = $lastBalanceFile->getClientOriginalName();
        $uniquelastBalanceNAme = time().$lastBalanceFileNAme;
        $lastBalanceFile->move('images', $uniquelastBalanceNAme);

        $user->last_balance = $uniquelastBalanceNAme;

        }


        if($request->has('average_volume_natural_gas')){
            $user->last_year_average_trade_volume_of_natural_gas = $request->average_volume_natural_gas;
        }


        
        if($request->has('average_volume_electric_power')){
            $user->last_year_average_powersold_of_electric_engery = $request->average_volume_electric_power;
        }

        $user->save();

        return back()->withSuccess("user has been updated");
    }







    // super admin purchase request section


    
    public function superadmin_orders()
    {
        $orders = buyerOrders::with(['bids'])->orderBy('id', 'desc')->get();
        $page_title = 'All Purchase Requests';
        return view('admin.orders.index', compact('orders','page_title'));
    }

    public function superadmin_orders_which_open()
    {
        $orders = buyerOrders::with(['bids'])->where('status', 'open')->get();
        $page_title = 'Open Orders';
        return view('admin.orders.index', compact('orders', 'page_title'));
    }


    
    public function superadmin_orders_under_analysis()
    {
        $orders = buyerOrders::with(['bids'])->where('status', 'under_analysis')->get();
        $page_title = 'Under Analysis Orders';
        return view('admin.orders.index', compact('orders', 'page_title'));
    }

    public function superadmin_orders_awarded()
    {
        $orders = buyerOrders::with(['bids'])->where('status', 'awarded')->get();
        $page_title = 'Awarded Orders';
        return view('admin.orders.index', compact('orders', 'page_title'));
    }


    public function superadmin_orders_desert()
    {
        $orders = buyerOrders::with(['bids'])->where('status', 'desert')->get();
        $page_title = 'Awarded Orders';
        return view('admin.orders.index', compact('orders', 'page_title'));
    }





}
