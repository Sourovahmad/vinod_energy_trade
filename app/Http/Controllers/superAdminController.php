<?php

namespace App\Http\Controllers;

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
}
