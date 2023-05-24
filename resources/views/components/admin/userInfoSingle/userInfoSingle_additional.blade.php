<div class="container">


    <form method="POST" action="{{ route('super_admin_user_update_additional_info') }}" enctype="multipart/form-data">



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
        
        <input type="text" name="user_id" value="{{ $user->id }}" hidden>
     
        
        <div class="mt-4">
            <label for="id_number" > Id number </label>
            <input id="id_number" class="block mt-1 w-full form-control" type="text" name="person_id" value="{{$user->person_id  }}" required autofocus autocomplete="person_id" />
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
            <label for="cuit_proof" class="w-100"> PROOF of CUIT     </label>
            <input id="cuit_proof" class="block mt-1 w-full form-control" type="file" name="cuit_proof" autofocus autocomplete="cuit_proof" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" />
        </div>


   
    
    
        
        <div class="mt-4">
            <label for="logo" > Logo </label>
            <input id="logo" class="block mt-1 w-full form-control" type="file" name="logo" :value="old('logo')"  autofocus autocomplete="logo" accept="image/*" />
        </div>



    
    
    
        
        
        <div class="mt-4">
            <label for="last_balance" class="form-label" > Last Balance </label>
            <input id="last_balance" class="block mt-1 w-full form-control" type="file" name="last_balance"  autofocus autocomplete="last_balance" accept=".pdf"  />
        </div>


    
                   
        
        <div class="mt-4">
            <label for="role" class="form-label"> Role </label>
            <input id="role" class="form-control block mt-1 w-full" type="text" name="role" value="{{ $user->role }}" required autofocus autocomplete="role" />
        </div>
    
    
    
    



    
    
        <div class="mt-4">
            <label for="user_type" class="block text-gray-700 text-sm font-bold mb-2">Choose Product</label>
            
            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox"  name="natural_gas_checkbox" id="natural_gas_checkbox"
                


                
        
    @if($user->last_year_average_trade_volume_of_natural_gas)
        checked
    @endif
                >
                <label class="form-check-label" for="flexCheckIndeterminate">
                    Gas Natural
                </label>
            </div>


    
            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" name="electric_power_checkbox" id="electric_power_checkbox"
                
            @if($user->last_year_average_powersold_of_electric_engery)
                checked
            @endif
                        
                
                
                >
                <label class="form-check-label" for="flexCheckIndeterminate">
                    Electric Power
                </label>
            </div>
    
        </div>
    
    
    


        
 
        <div class="mt-4" id="average_volume_natural_gas_div" 
        
        @if(is_null($user->last_year_average_trade_volume_of_natural_gas))
        hidden

        @endif
        
        >
            <label for="average_volume_natural_gas" value="{{ __('AVERAGE VOLUME OF NATURAL GAS of LAST YEAR (dam3/day)') }}" />
            <input id="average_volume_natural_gas_input" class="block mt-1 w-full form-control" type="text" name="average_volume_natural_gas" value="{{ $user->last_year_average_trade_volume_of_natural_gas }}"  autofocus autocomplete="average_volume_natural_gas" />
        </div>
    
    


    <div class="mt-4" id="average_volume_electric_power_div" 
    @if(is_null($user->last_year_average_powersold_of_electric_engery))
    hidden
    @endif
    
    >
        <label for="average_volume_electric_power" value="{{ __('AVERAGE POWER of LAST YEAR AVERAGE. (MW)') }}  " />
        <input id="average_volume_electric_power_input" class="block mt-1 w-full form-control" type="text" name="average_volume_electric_power" value="{{ $user->last_year_average_powersold_of_electric_engery }}"  autofocus autocomplete="average_volume_electric_power" />
    </div>
    





    <div class="w-100 text-center">
        <h4>  Previous Info</h4>
    
    </div>


    @if(!is_null($user->cuit_proof))
        
@php
$userProofOfcuitFile = public_path('images/' . $user->cuit_proof); // Replace with the actual file path
$fileExtensionCuit = pathinfo($userProofOfcuitFile, PATHINFO_EXTENSION);
$cuit_fileType = mime_content_type($userProofOfcuitFile);
@endphp





<div class="mt-4">
<label  class="w-100"> Previous (PROOF of CUIT)    </label>
 <div class="w-100 h-40">

    @if($cuit_fileType == 'application/pdf')
      <embed src="{{ asset('images/') . $user->cuit_proof }}" width="100%" height="400px" type="application/pdf" />

        @else

        <img width="100%" height="400px" src="{{ asset('images/') }}/{{ $user->cuit_proof }}" alt="logo">

    @endif



 </div>
</div>


    @endif






                    @if(!is_null($user->profile_photo_path))
<div class="mt-4">
    <label  > Previous Logo </label>
    <img width="100%" height="400px" src="{{ asset('images/') }}/{{ $user->profile_photo_path }}" alt="logo">
</div>


@endif



@if(!is_null($user->last_balance))
        
<div class="mt-4">
    <label  class="w-100"> Previous (Last Balance)    </label>
     <div class="w-100">
        <embed src="{{ asset('images/') }}/{{ $user->last_balance }}" width="100%" height="400px" type="application/pdf" />
     </div>
</div>



@endif
    
    
    
        <div class="mt-4"> 
            <button class="btn btn-primary btn-lg" type="submit">
                {{ __('Update') }}
            </button>
    
    
        </div>
      
    
    
    
    
    </form>
</div>



<script>
      

    const choseProductCheckbox = idFinder('natural_gas_checkbox');
    choseProductCheckbox.onchange = function() {

        if (choseProductCheckbox.checked) {

        idFinder('average_volume_natural_gas_div').removeAttribute('hidden');
        idFinder('average_volume_natural_gas_input').setAttribute('required', 'true');

        } else {

        idFinder('average_volume_natural_gas_div').setAttribute('hidden', 'true');
        idFinder('average_volume_natural_gas_input').removeAttribute('required');
        
        }

    }


    // electric power checkbox functions
    

    const electric_power_checkbox = idFinder('electric_power_checkbox');
    electric_power_checkbox.onchange = function() {

        if (electric_power_checkbox.checked) {

        idFinder('average_volume_electric_power_div').removeAttribute('hidden');
        idFinder('average_volume_natural_gas_input').removeAttribute('required');


        } else {

        idFinder('average_volume_electric_power_div').setAttribute('hidden', 'true');
        idFinder('average_volume_natural_gas_input').removeAttribute('required');
        
        }

    }






    function idFinder(id) {
    return document.getElementById(id);
    }
    </script>