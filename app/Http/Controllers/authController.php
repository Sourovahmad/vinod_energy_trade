<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function register_post(Request $request)
    {



       $request->validate([
        'name' => 'required',
        'email' => 'required|unique:users',
        'user_type' => 'required',
        'password' => 'required|confirmed',
       ]);


        $newUser = new User;
        $newUser->name=$request->name;
        $newUser->email=$request->email;
        $newUser->phone=$request->phone;
        $newUser->user_type=$request->user_type;
        $newUser->password= bcrypt($request->password);


        $newUser->save();

       Auth::login($newUser);
       return view('frontend.additionalDetails.index');

    }

    public function user_update_additional_info(Request $request)
    {
        return $request;
    }
}
