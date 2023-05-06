<?php

namespace App\Http\Controllers;

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


    public function orders_which_need_review()
    {
        $orders = orderHasBid::with(['user', 'order'])->where('reviewed', false)->get();
        return view('admin.review.index', compact('orders'));
    }

    public function superadmin_approve_or_delete_bid(Request $request)
    {
        $request->validate([
            'bid_id' => 'required',
            'status' => 'required'
        ]);

        $bid = orderHasBid::findOrFail($request->bid_id);

        if ($request->status == 'approve') {
            $bid->reviewed = true;
            $bid->save();
            return back()->withSuccess('bid Approved');
        }else{
            $bid->delete();
            return back()->withSuccess('bid has been deleted');
        }
    }
}
