<x-guest-layout>
    <x-authentication-card>

        <x-slot name="logo">
        </x-slot>
     

        <form method="POST" action="{{ route('user_update_additional_info') }}" enctype="multipart/form-data">



            @csrf

            <div class="text-center">
                <div class="alert alert-success">
                    <strong>Registration was Successful!</strong><br>
                    
                   Please Update the Addtional informations.
                </div>

            </div>

            <div class="mt-4">
                <x-label for="id" value="{{ __('ID/Number') }}" />
                <x-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id')" required autofocus autocomplete="id"  />
            </div>





            <div class="mt-4">
                <x-label for="social_name" value="{{ __('Social Name of Your Company') }}" />
                <x-input id="social_name" class="block mt-1 w-full" type="text" name="social_name" :value="old('social_name')" required autofocus autocomplete="social_name" />
            </div>





            <div class="mt-4">
                <x-label for="social_name" value="{{ __('CUIT of Your Company') }}" />
                <x-input id="social_name" class="block mt-1 w-full" type="number" name="social_name" :value="old('social_name')" required autofocus autocomplete="social_name" />
            </div>






            <div class="mt-4">
                <x-label for="cuit_proof" value="{{ __('PROOF of CUIT ') }}" />
                <x-input id="cuit_proof" class="block mt-1 w-full" type="file" name="cuit_proof" :value="old('cuit_proof')" required autofocus autocomplete="cuit_proof" />
            </div>




            
            <div class="mt-4">
                <x-label for="logo" value="{{ __('Logo ') }}" />
                <x-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('logo')"  autofocus autocomplete="logo" />
            </div>




            
            
            <div class="mt-4">
                <x-label for="last_balance" value="{{ __('LAST BALANCE of the company') }}" />
                <x-input id="last_balance" class="block mt-1 w-full" type="file" name="last_balance" :value="old('last_balance')"  autofocus autocomplete="last_balance" />
            </div>



                       
            
            <div class="mt-4">
                <x-label for="role" value="{{ __('Role') }}" />
                <x-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('role')" required autofocus autocomplete="role" />
            </div>




            {{-- // additional info --}}


            <div class="mt-4">
                <label for="user_type" class="block text-gray-700 text-sm font-bold mb-2">Choose Product</label>
                <select id="company_product" class="form-select @error('user_type') border-red-500 @enderror" name="user_type" required>
                    <option value="">Not Selected</option>
                    <option value="natural_gas">NATURAL GAS</option>
                    <option value="electricity_power">ELECTRIC POWER </option>
                </select>

                @error('company_product')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>



            <div class="mt-4" id="average_volume_natural_gas_div" hidden>
                <x-label for="average_volume_natural_gas" value="{{ __('AVERAGE VOLUME OF NATURAL GAS TRADED IN THE LAST YEAR (dam3/day)') }}" />
                <x-input id="average_volume_natural_gas" class="block mt-1 w-full" type="text" name="average_volume_natural_gas" :value="old('average_volume_natural_gas')"  autofocus autocomplete="average_volume_natural_gas" />
            </div>



            <div class="mt-4" id="average_volume_electric_power_div" hidden>
                <x-label for="average_volume_electric_power" value="{{ __('AVERAGE POWER SOLD THROUGH PPAs IN THE LAST YEAR AVERAGE. (MW)') }}" />
                <x-input id="average_volume_electric_power" class="block mt-1 w-full" type="text" name="average_volume_electric_power" :value="old('average_volume_electric_power')"  autofocus autocomplete="average_volume_electric_power" />
            </div>



            <div class="mt-4"> 
                <x-button class="ml-4" type="submit">
                    {{ __('Update') }}
                </x-button>


            </div>
          




        </form>


        <script>
            window.onload = function() {
        const choseProductDropdown = idFinder('company_product');
        choseProductDropdown.onchange = function() {
            const selectedElement = choseProductDropdown.value;

            if (selectedElement == 'natural_gas') {
            idFinder('average_volume_natural_gas_div').removeAttribute('hidden');
            idFinder('average_volume_electric_power_div').setAttribute('hidden', 'true');
            } else if (selectedElement == 'electricity_power') {
            idFinder('average_volume_electric_power_div').removeAttribute('hidden');
            idFinder('average_volume_natural_gas_div').setAttribute('hidden', 'true');
            } else {
            idFinder('average_volume_natural_gas_div').setAttribute('hidden', 'true');
            idFinder('average_volume_electric_power_div').setAttribute('hidden', 'true');
            }
        }
        }

        function idFinder(id) {
        return document.getElementById(id);
        }
        </script>



    </x-authentication-card>
</x-guest-layout>
