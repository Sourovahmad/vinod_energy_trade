<x-guest-layout>
    <x-authentication-card>

        <x-slot name="logo">
        </x-slot>
     @php
        $user = auth()->user();
     @endphp

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
                <x-label for="id" value="{{ __('DNI/Documento de Identidad ') }}" />
                <x-input id="id" class="block mt-1 w-full" type="text" name="person_id" value="{{ $user->person_id }}" required autofocus autocomplete="id"  />
            </div>





            <div class="mt-4">
                <x-label for="social_name" value="{{ __('Razón Social de la Empresa ') }}" />
                <x-input id="social_name" class="block mt-1 w-full" type="text" name="social_name" value="{{$user->social_name  }}" required autofocus autocomplete="social_name" />
            </div>





            <div class="mt-4">
                <x-label for="company_suit" value="{{ __('CUIT de la Empresa ') }}" />
                <x-input id="company_suit" class="block mt-1 w-full" type="number" name="company_suit" value="{{ $user->company_suit }}" required autofocus autocomplete="company_suit" />
            </div>






            <div class="mt-4">
                <x-label for="cuit_proof" value="{{ __('Constancia de CUIT') }}" />
                <x-input id="cuit_proof" class="block mt-1 w-full" type="file" name="cuit_proof" :value="old('cuit_proof')" required autofocus autocomplete="cuit_proof" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" />
            </div>




            
            <div class="mt-4">
                <x-label for="logo" value="{{ __('Logo de la Empresa') }}" />
                <x-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('logo')" required  autofocus autocomplete="logo" accept="image/*" />
            </div>




            
            
            <div class="mt-4">
                <x-label for="last_balance" value="{{ __('Últimos Estados Contables de la Empresa') }}" />
                <x-input id="last_balance" class="block mt-1 w-full" type="file" name="last_balance" :value="old('last_balance')"  autofocus autocomplete="last_balance" accept=".pdf" required />
            </div>



                       
            
            <div class="mt-4">
                <x-label for="role" value="{{ __('Posición en la Empresa ') }}" />
                <x-input id="role" class="block mt-1 w-full" type="text" name="role" value="{{ $user->role }}" required autofocus autocomplete="role" />
            </div>




            {{-- // additional info --}}


            <div class="mt-4">
                <label for="user_type" class="block text-gray-700 text-sm font-bold mb-2">Fuentes de Abastecimiento </label>
                
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
                <x-label for="average_volume_natural_gas" value="{{ __('Volumen de Gas Natural del último año (dam3/día) ') }}" />
                <x-input id="average_volume_natural_gas_input" class="block mt-1 w-full" type="text" name="average_volume_natural_gas" value="{{ $user->last_year_average_trade_volume_of_natural_gas }}"  autofocus autocomplete="average_volume_natural_gas" />
            </div>



            <div class="mt-4" id="average_volume_electric_power_div" hidden>
                <x-label for="average_volume_electric_power" value="{{ __('= Potencia Media Energía Eléctrica del último año (MW)') }}  " />
                <x-input id="average_volume_electric_power_input" class="block mt-1 w-full" type="text" name="average_volume_electric_power" value="{{ $user->last_year_average_powersold_of_electric_engery }}"  autofocus autocomplete="average_volume_electric_power" />
            </div>



            {{-- changed to checkbox --}}
   




            <div class="mt-4"> 
                <x-button type="submit">
                    {{ __('Update') }}
                </x-button>


            </div>
          




        </form>


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



    </x-authentication-card>
</x-guest-layout>
