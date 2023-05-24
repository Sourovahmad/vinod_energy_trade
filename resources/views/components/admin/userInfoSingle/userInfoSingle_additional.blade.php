<div class="container">


    <form method="POST" action="{{ route('user_update_additional_info') }}" enctype="multipart/form-data">



        @csrf
    
        <div class="text-center">
          
    
    
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
    
    
    
    
                            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
        </div>
    
     
    
    
    
    
        <div class="mt-4">
            <label for="social_name" > Social Name of Your Company </label>
            <input id="social_name" class="block mt-1 w-full form-control" type="text" name="social_name" value="{{$user->social_name  }}" required autofocus autocomplete="social_name" />
        </div>
    
    
    
    
    
        <div class="mt-4">
            <label for="company_suit">CUIT of Your Company </label>
            <input id="company_suit" class="block mt-1 w-full form-control" type="text" name="company_suit" value="{{ $user->company_suit }}" required autofocus autocomplete="company_suit" />
        </div>
    
    
    
    
    
    
        <div class="mt-4">
            <label for="cuit_proof" > PROOF of CUIT </label>
            <input id="cuit_proof" class="block mt-1 w-full form-control" type="file" name="cuit_proof" required autofocus autocomplete="cuit_proof" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" />
        </div>
    
    
    
    
        
        <div class="mt-4">
            <label for="logo" > Logo </label>
            <input id="logo" class="block mt-1 w-full form-control" type="file" name="logo" :value="old('logo')" required  autofocus autocomplete="logo" accept="image/*" />
        </div>
    
    
    
    
        
        
        <div class="mt-4">
            <label for="last_balance" class="form-label" > Last Balance </label>
            <input id="last_balance" class="block mt-1 w-full form-control" type="file" name="last_balance" :value="old('last_balance')"  autofocus autocomplete="last_balance" accept=".pdf" required />
        </div>
    
    
    
                   
        
        <div class="mt-4">
            <label for="role" class="form-label"> Role </label>
            <input id="role" class="form-control block mt-1 w-full" type="text" name="role" value="{{ $user->role }}" required autofocus autocomplete="role" />
        </div>
    
    
    
    
        {{-- // additional info --}}
    
    
        <div class="mt-4">
            <label for="user_type" class="block text-gray-700 text-sm font-bold mb-2">Choose Product</label>
            
            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" value="" name="natural_gas_checkbox" id="natural_gas_checkbox">
                <label class="form-check-label" for="flexCheckIndeterminate">
                    Gas Natural
                </label>
            </div>
    
    
            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" value="" name="electric_power_checkbox" id="electric_power_checkbox">
                <label class="form-check-label" for="flexCheckIndeterminate">
                    Electric Power
                </label>
            </div>
    
        </div>
    
    
    
        <div class="mt-4" id="average_volume_natural_gas_div" hidden>
            <label for="average_volume_natural_gas" value="{{ __('AVERAGE VOLUME OF NATURAL GAS of LAST YEAR (dam3/day)') }}" />
            <input id="average_volume_natural_gas_input" class="block mt-1 w-full" type="text" name="average_volume_natural_gas" value="{{ $user->last_year_average_trade_volume_of_natural_gas }}"  autofocus autocomplete="average_volume_natural_gas" />
        </div>
    
    
    
        <div class="mt-4" id="average_volume_electric_power_div" hidden>
            <label for="average_volume_electric_power" value="{{ __('AVERAGE POWER of LAST YEAR AVERAGE. (MW)') }}  " />
            <input id="average_volume_electric_power_input" class="block mt-1 w-full" type="text" name="average_volume_electric_power" value="{{ $user->last_year_average_powersold_of_electric_engery }}"  autofocus autocomplete="average_volume_electric_power" />
        </div>
    
    
    
        {{-- changed to checkbox --}}
    
    
    
    
    
        <div class="mt-4"> 
            <button type="submit">
                {{ __('Update') }}
            </button>
    
    
        </div>
      
    
    
    
    
    </form>
</div>