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
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|unique:users',
        'user_type' => 'required',
        'password' => 'required|confirmed',
       ]);


        $newUser = new User;
        $newUser->first_name=$request->first_name;
        $newUser->last_name=$request->last_name;
        $newUser->email=$request->email;
        $newUser->phone=$request->phone;
        $newUser->user_type=$request->user_type;
        $newUser->password= bcrypt($request->password);


        $newUser->save();

       Auth::login($newUser);
       return redirect()->route('additional_deatils')->with('success', 'Registration was Successfull. Update the additional info');

    }

    public function user_update_additional_info(Request $request)
    {
     
        $request->validate([
            'person_id' => 'required',
            'social_name' => 'required',
            'company_suit' => 'required',
            'cuit_proof' => 'required|file|mimes:jpeg,png,pdf|max:5120',
            'logo' => 'required',
            'last_balance' => 'required',
            'role' => 'required',
        ]);


        $user = User::find(auth()->user()->id);

        $user->person_id = $request->person_id;
        $user->social_name = $request->social_name;
        $user->company_suit = $request->company_suit;


        // saving suitproof file
        $suitproofFile = $request->file('cuit_proof');
        $suitproofImgname = $suitproofFile->getClientOriginalName();
        $uniqueNameForSuitFile = time().$suitproofImgname;
        $suitproofFile->move('images', $uniqueNameForSuitFile);

        $user->cuit_proof = $uniqueNameForSuitFile;



        //saving logo
        $logoFile = $request->file('logo');
        $logoFileName = $logoFile->getClientOriginalName();
        $uniqueLogoNAme = time().$logoFileName;
        $logoFile->move('images', $uniqueLogoNAme);

        $user->profile_photo_path = $uniqueLogoNAme;



        // last balance

        $lastBalanceFile = $request->file('last_balance');
        $lastBalanceFileNAme = $lastBalanceFile->getClientOriginalName();
        $uniquelastBalanceNAme = time().$lastBalanceFileNAme;
        $lastBalanceFile->move('images', $uniquelastBalanceNAme);

        $user->last_balance = $uniquelastBalanceNAme;



        $user->role = $request->role;
        $user->company_product = $request->company_product;
        

        if($request->has('average_volume_natural_gas')){
            $user->last_year_average_trade_volume_of_natural_gas = $request->average_volume_natural_gas;
        }


        
        if($request->has('average_volume_electric_power')){
            $user->last_year_average_powersold_of_electric_engery = $request->average_volume_electric_power;
        }

        $user->save();
        return redirect()->route('buyer_create');

        
    }
}
