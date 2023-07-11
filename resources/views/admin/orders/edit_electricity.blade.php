@extends('admin.layout.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/buyer_main_css.css') }}" />
<script src="{{ asset('js/buyerConfig.js') }}" defer></script>


<div class="container mt-4" style="border: 1px solid #3e3e3d">


    

    {{-- session error messages --}}

    @include('components.additional.adminError')

    {{-- end of the error messages --}}




    <div class="header border-bottom mt-2 text-center">
        <h4> Editing: <b>{{ $order->supply_point_name }}  </b>  </h4>

    </div>


    <form action="{{ route('superadmin_order_update') }}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="d-flex flex-column">


            <input type="text" name="purchase_request_for" id="" value="ELECTRICITY" hidden>
            <input type="text" name="order_hidden_id" id="" value="{{ $order->id }}" hidden>


            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Supply Point Name</p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" name="supply_point_name" value="{{ $order->supply_point_name }}" required />
                    </div>
                </div>
            </div>




            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Geographic Location (Province location)</p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" name="location_of_supply_point" value="{{ $order->location_of_supply_point }}" required />
                    </div>
                </div>
            </div>



            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Deadline for receipt of Offers:</p>
                    </div>
                    <div class="col-3">

                        @php
                        $carbonDate_deadline_of_offer = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $order->deadline_offer_recive);
                        $formatted_Deadline_offer = $carbonDate_deadline_of_offer->format('Y-m-d\TH:i');
                        @endphp


                        <input type="datetime-local" class="select" name="deadline_offer_recive" value="{{ $formatted_Deadline_offer }}" required />
                    </div>
                </div>
            </div>




            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <p>Date of publication of the Purchase Order:</p>
                    </div>
                    <div class="col-3">


                        @php
                        $carbonDate_publication = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $order->publication_date);
                        $formatted_publication_date = $carbonDate_publication->format('Y-m-d\TH:i');
                        @endphp




                        <input type="datetime-local" class="select" name="publication_date" value="{{ $formatted_publication_date }}" required />
                    </div>
                </div>
            </div>




            <div class="form-group mt-4">
                <div class="row">
                    <div class="col-4">
                        <p>Distribuidora de Energía Eléctrica PUNTO DE CONSUMO 1</p>
                    </div>
                    <div class="col-3">
                        <select class="select form-control" name="natural_gas_point_of_distribution_consumtion_1" required>

                            @php
                            $selectedConsumption = $order->natural_gas_point_of_distribution_consumtion_1;
                            @endphp

                            {{-- code start from here --}}


                            <option value="EDESUR (Distributor of Energia Sur SA)" {{ $selectedConsumption == 'EDESUR (Distributor of Energia Sur SA)' ? 'selected' : '' }}>
                                EDESUR (Distributor of Energia Sur SA)
                            </option>
                            <option value="EDENOR (Distributor and Marketer of Energia Norte SA)" {{ $selectedConsumption == 'EDENOR (Distributor and Marketer of Energia Norte SA)' ? 'selected' : '' }}>
                                EDENOR (Distributor and Marketer of Energia Norte SA)
                            </option>
                            <option value="EDEA (Atlantic Energy Distribution Company SA)" {{ $selectedConsumption == 'EDEA (Atlantic Energy Distribution Company SA)' ? 'selected' : '' }}>
                                EDEA (Atlantic Energy Distribution Company SA)
                            </option>
                            <option value="EDEN (North Energy Distribution Company SA)" {{ $selectedConsumption == 'EDEN (North Energy Distribution Company SA)' ? 'selected' : '' }}>
                                EDEN (North Energy Distribution Company SA)
                            </option>
                            <option value="EDES (Energy South SA Distribution Company)" {{ $selectedConsumption == 'EDES (Energy South SA Distribution Company)' ? 'selected' : '' }}>
                                EDES (Energy South SA Distribution Company)
                            </option>
                            <option value="EDELAP (La Plata SA Distribution Company)" {{ $selectedConsumption == 'EDELAP (La Plata SA Distribution Company)' ? 'selected' : '' }}>
                                EDELAP (La Plata SA Distribution Company)
                            </option>
                            <option value="ECS.APEM Energy Catamarca SAPEM (Anonymous Company with Majority State Participation)" {{ $selectedConsumption == 'ECS.APEM Energy Catamarca SAPEM (Anonymous Company with Majority State Participation)' ? 'selected' : '' }}>
                                ECS.APEM Energy Catamarca SAPEM (Anonymous Company with Majority State Participation)
                            </option>
                            <option value="SECHEEP (Energy Services of Chaco Provincial State Company)" {{ $selectedConsumption == 'SECHEEP (Energy Services of Chaco Provincial State Company)' ? 'selected' : '' }}>
                                SECHEEP (Energy Services of Chaco Provincial State Company)
                            </option>
                            <option value="EPEC (Provincial Energy Company of Córdoba SA)" {{ $selectedConsumption == 'EPEC (Provincial Energy Company of Córdoba SA)' ? 'selected' : '' }}>
                                EPEC (Provincial Energy Company of Córdoba SA)
                            </option>
                            <option value="DPEC (Provincial Directorate of Energy of Corrientes SA)" {{ $selectedConsumption == 'DPEC (Provincial Directorate of Energy of Corrientes SA)' ? 'selected' : '' }}>
                                DPEC (Provincial Directorate of Energy of Corrientes SA)
                            </option>
                            <option value="ENERSA SA (Energy of Entre Ríos SA)" {{ $selectedConsumption == 'ENERSA SA (Energy of Entre Ríos SA)' ? 'selected' : '' }}>
                                ENERSA SA (Energy of Entre Ríos SA)
                            </option>
                            <option value="Formosa Electric Resources and Energy Service (REFSA SA)" {{ $selectedConsumption == 'Formosa Electric Resources and Energy Service (REFSA SA)' ? 'selected' : '' }}>
                                Formosa Electric Resources and Energy Service (REFSA SA)
                            </option>
                            <option value="EJE SA (Empresa Jujeña De Energía SA)" {{ $selectedConsumption == 'EJE SA (Empresa Jujeña De Energía SA)' ? 'selected' : '' }}>
                                EJE SA (Empresa Jujeña De Energía SA)
                            </option>
                            <option value="APE (Pampa Provincial Energy Administration)" {{ $selectedConsumption == 'APE (Pampa Provincial Energy Administration)' ? 'selected' : '' }}>
                                APE (Pampa Provincial Energy Administration)
                            </option>
                            <option value="EDELAR (Electricity Distribution Company of La Rioja SA)" {{ $selectedConsumption == 'EDELAR (Electricity Distribution Company of La Rioja SA)' ? 'selected' : '' }}>
                                EDELAR (Electricity Distribution Company of La Rioja SA)
                            </option>
                            <option value="EDEMSA (Electricity Distribution Company of Mendoza SA)" {{ $selectedConsumption == 'EDEMSA (Electricity Distribution Company of Mendoza SA)' ? 'selected' : '' }}>
                                EDEMSA (Electricity Distribution Company of Mendoza SA)
                            </option>
                            <option value="EDETE SA (Eastern Electricity Distribution Company SA)" {{ $selectedConsumption == 'EDETE SA (Eastern Electricity Distribution Company SA)' ? 'selected' : '' }}>
                                EDETE SA (Eastern Electricity Distribution Company SA)
                            </option>
                            <option value="EMSA (Electricity of Misiones SA)" {{ $selectedConsumption == 'EMSA (Electricity of Misiones SA)' ? 'selected' : '' }}>
                                EMSA (Electricity of Misiones SA)
                            </option>
                            <option value="EPEN (Neuquén Provincial Energy Entity)" {{ $selectedConsumption == 'EPEN (Neuquén Provincial Energy Entity)' ? 'selected' : '' }}>
                                EPEN (Neuquén Provincial Energy Entity)
                            </option>
                            <option value="EDERSA (Energy Company of Rio Negro SA)" {{ $selectedConsumption == 'EDERSA (Energy Company of Rio Negro SA)' ? 'selected' : '' }}>
                                EDERSA (Energy Company of Rio Negro SA)
                            </option>
                            <option value="EDESA (Electricity Distribution Company of Salta)" {{ $selectedConsumption == 'EDESA (Electricity Distribution Company of Salta)' ? 'selected' : '' }}>
                                EDESA (Electricity Distribution Company of Salta)
                            </option>
                            <option value="ESJ SA (Energy San Juan SA)" {{ $selectedConsumption == 'ESJ SA (Energy San Juan SA)' ? 'selected' : '' }}>
                                ESJ SA (Energy San Juan SA)
                            </option>
                            <option value="EDESAL SA (Distribution Company San Luis SA)" {{ $selectedConsumption == 'EDESAL SA (Distribution Company San Luis SA)' ? 'selected' : '' }}>
                                EDESAL SA (Distribution Company San Luis SA)
                            </option>
                            <option value="EPESF (Provincial Energy Company of Santa Fe SA)" {{ $selectedConsumption == 'EPESF (Provincial Energy Company of Santa Fe SA)' ? 'selected' : '' }}>
                                EPESF (Provincial Energy Company of Santa Fe SA)
                            </option>
                            <option value="EDESE (Electricity Distribution Company of Santiago del Estero SA)" {{ $selectedConsumption == 'EDESE (Electricity Distribution Company of Santiago del Estero SA)' ? 'selected' : '' }}>
                                EDESE (Electricity Distribution Company of Santiago del Estero SA)
                            </option>
                            <option value="EDET (Electrical Distribution Company of Tucumán SA)" {{ $selectedConsumption == 'EDET (Electrical Distribution Company of Tucumán SA)' ? 'selected' : '' }}>
                                EDET (Electrical Distribution Company of Tucumán SA)
                            </option>
                            <option value="Other Distributor or Cooperative" {{ $selectedConsumption == 'Other Distributor or Cooperative' ? 'selected' : '' }}>
                                Other Distributor or Cooperative
                            </option>


                            {{-- Code ends here --}}



                        </select>
                    </div>
                </div>
            </div>





            <div class="form-group mt-3">
                <div class="row">
                    <div class="col-4">
                        <p>User Categoy POINT OF CONSUMPTION</p>
                    </div>
                    <div class="col-3">
                        <select class="select" name="user_category_point_of_consumption" required>


                            @php
                            $userSelectedCategory = $order->user_category_point_of_consumption;
                            @endphp

                            <option value="Distributor 300 KW" {{ $userSelectedCategory == 'Distributor 300 KW' ? 'selected' : '' }}> Distributor 300 KW </option>
                            <option value="GUDI" {{ $userSelectedCategory == 'GUDI' ? 'selected' : '' }}>GUDI</option>
                            <option value="GUME" {{ $userSelectedCategory == 'GUME' ? 'selected' : '' }}>GUME</option>
                            <option value="GUM" {{ $userSelectedCategory == 'GUM' ? 'selected' : '' }}>GUM</option>
                        </select>
                    </div>
                </div>
            </div>




            <span class="border-bottom  mb-3 mt-4 p-2"> Expected Consumption</span>



            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Enero</p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" value="{{ $order->expected_january }}" name="expected_january" required />
                    </div>
                </div>
            </div>





            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Febrero </p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" value="{{ $order->expected_february }}" name="expected_february" required />
                    </div>
                </div>
            </div>


            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Marzo </p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" value="{{ $order->expected_march }}" name="expected_march" required />
                    </div>
                </div>
            </div>

            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Abril </p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" value="{{ $order->expected_april }}" name="expected_april" required />
                    </div>
                </div>
            </div>

            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Mayo</p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" value="{{ $order->expected_may }}" name="expected_may" required />
                    </div>
                </div>
            </div>

            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Junio </p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2"  value="{{ $order->expected_june }}" name="expected_june" required />
                    </div>
                </div>
            </div>

            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Julio</p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" value="{{ $order->expected_july }}" name="expected_july" required />
                    </div>
                </div>
            </div>

            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Agosto</p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" value="{{ $order->expected_august }}" name="expected_august" required />
                    </div>
                </div>
            </div>

            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Septiembre</p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" value="{{ $order->expected_september }}" name="expected_september" required />
                    </div>
                </div>
            </div>

            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Octubre </p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" value="{{ $order->expected_october }}" name="expected_october" required />
                    </div>
                </div>
            </div>

            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Noviembre</p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" value="{{ $order->expected_november }}" name="expected_november" required />
                    </div>
                </div>
            </div>

            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Diciembre</p>
                    </div>
                    <div class="col-3">
                        <input type="text" class="select py-2" value="{{ $order->expected_december }}" name="expected_december" required />
                    </div>
                </div>
            </div>




            <span class="border-bottom">Contract Conditions:</span>


            <div class="form-group mt-4">
                <div class="row">
                    <div class="col-4">
                        <p>Contract Term (months)</p>
                    </div>
                    <div class="col-3">
                        <input type="number" class="select py-2" value="{{ intval($order->contact_term_months) }}" name="contact_term_months" required />
                    </div>
                </div>
            </div>


            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Start of Supply:</p>
                    </div>
                    <div class="col-3">

                      @if($order->start_of_supply)
                        
                     

                      @php
                        $carbonDate_supplyStart = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $order->start_of_supply);
                        $formatted_supplyStart = $carbonDate_supplyStart->format('Y-m-d');


                      @endphp

                        <input type="date" class="select" value="{{  $formatted_supplyStart }}" name="start_of_supply" />

                        @else

                        <input type="date" class="select" value="" name="start_of_supply" />


                        @endif



                    </div>
                </div>
            </div>






            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Priority Given To Agreement (1 to 20)</p>
                    </div>
                    <div class="col-3">
                        <input type="number" class="select py-2" value="{{ intval($order->priority_given_to_agreement) }}" name="priority_given_to_agreement" min="1" max="20" required />
                    </div>
                </div>
            </div>

            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Partial Award:</p>
                    </div>
                    <div class="col-3">
                        <select class="select" name="partial_award" required>
                            <option value="YES" @if($order->partial_award == 'YES' )
                                selected
                            @endif>YES</option>
                            <option value="NO"
                            @if($order->partial_award == 'NO' )
                                selected
                            @endif
                            
                            >NO</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Price Renegotiation Clause:</p>
                    </div>
                    <div class="col-3">
                        <select class="select" name="price_renegotiation" required>

                          @if($order->price_renegotiation == 'YES')
                          
                            <option value="YES" selected>YES</option>
                            <option value="NO">NO</option>

                            @else

                            <option value="YES">SI</option>
                            <option value="NO" selected>NO</option>

                          @endif
          

                        </select>
                    </div>
                </div>
            </div>




            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>early termination Clause:</p>
                    </div>
                    <div class="col-3">
                        <select class="select" name="early_termination" required>

                          @if($order->early_termination == 'YES')
                          
                          <option value="YES" selected>YES</option>
                          <option value="NO">NO</option>

                          @else

                          <option value="YES">SI</option>
                          <option value="NO" selected>NO</option>

                        @endif

                        </select>
                    </div>
                </div>
            </div>



            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Take or Pay optional to the Seller:</p>
                    </div>
                    <div class="col-3">
                        <select class="select" name="take_or_pay_optional_to_seller" required>

                          @if($order->take_or_pay_optional_to_seller == 'YES')
                          
                          <option value="YES" selected>YES</option>
                          <option value="NO">NO</option>

                          @else

                          <option value="YES">SI</option>
                          <option value="NO" selected>NO</option>

                        @endif




                        </select>
                    </div>
                </div>
            </div>


            <span class="border-bottom">In case the previous answer is NO:
            </span>


            <div class="form-group mt-4">
                <div class="row">
                    <div class="col-4">
                        <p>Take or Pay (0 to 100%):</p>
                    </div>
                    <div class="col-3">
                        <input type="number" min="0" max="100" value="{{ intval($order->take_or_pay_percentage) }}" class="select" name="take_or_pay_percentage" />
                    </div>
                </div>
            </div>


            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Optional Delivery or Pay to the Seller:</p>
                    </div>
                    <div class="col-3">
                        <select class="select" name="optional_delivery_to_seller">

                          @if($order->optional_delivery_to_seller == 'YES')
                          
                          <option value="YES" selected>YES</option>
                          <option value="NO">NO</option>

                          @else

                          <option value="YES">SI</option>
                          <option value="NO" selected>NO</option>

                        @endif



                        </select>
                    </div>
                </div>
            </div>


            <span class="border-bottom">In case the previous answer is NO:
            </span>
            <div class="form-group mt-4">
                <div class="row">
                    <div class="col-4">
                        <p>Delivery or Pay (0 to 100%):</p>
                    </div>
                    <div class="col-3">
                        <input type="number" min="0" value="{{ intval($order->delivery_or_pay) }}"  max="100" class="select" name="delivery_or_pay" />
                    </div>
                </div>
            </div>


            <div class="form-group mt-4">
                <div class="row">
                    <div class="col-4">
                        <p>Payment term (5 to 180 days):</p>
                    </div>
                    <div class="col-3">
                        <input type="number" value="{{ intval($order->payment_term) }}" class="select" name="payment_term" min="5" max="180" required />
                    </div>
                </div>
            </div>



            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Exchange Rate:</p>
                    </div>
                    <div class="col-3">
                        <select class="select" name="exchange_rate" required>
                            <option value="BNA Ticket Seller" 
                            
                              @if($order->exchange_rate == "BNA Ticket Seller"  )
                                  selected
                              @endif
                            >BNA Ticket Seller</option>


                            <option value="BNA Currency Seller"
                            @if($order->exchange_rate == "BNA Currency Seller"  )
                            selected
                        @endif
                            >
                                BNA Currency Seller
                            </option>
                            <option value="ARS"
                            
                            @if($order->exchange_rate == "ARS"  )
                            selected
                        @endif
                            
                            >ARS</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group mt-4">
                <div class="row">
                    <div class="col-4">
                        <p>Default Rate Debts in USD:</p>
                    </div>
                    <div class="col-3">
                        <input type="number" value="{{ intval($order->default_rates_debts) }}"   class="select" name="default_rates_debts" required />
                    </div>
                </div>
            </div>


            <div class="form-group mt-4">
                <div class="row">
                    <div class="col-4">
                        <p>Mortgage Rate Debts in Pesos:</p>
                    </div>
                    <div class="col-3">
                        <input type="number"  value="{{ intval($order->mortage_rate_debts) }}" class="select" name="mortage_rate_debts" required />
                    </div>
                </div>
            </div>


            <div class="form-group mt-2">
                <div class="row">
                    <div class="col-4">
                        <p>Auction Commission:</p>
                    </div>
                    <div class="col-3">
                        <select class="select" name="auction_commision" required>



                            <option value="Paid by the Buyer" 
                              @if($order->auction_commision == "Paid by the Buyer" )
                                  selected
                              @endif
                            
                            >Paid by the Buyer</option>
                            <option value="Paid by the Seller"
                            
                            @if($order->auction_commision == "Paid by the Seller" )
                            selected
                        @endif
                            
                            >
                                Paid by the Seller
                            </option>
                            <option value="Paid by Both Parties"
                           
                            @if($order->auction_commision == "Paid by Both Parties" )
                            selected
                        @endif
                            
                            >
                                Paid by Both Parties
                            </option>




                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group mt-4">
                <div class="row">
                    <div class="col-4">
                        <p> Garantía Mantenimiento de Oferta (USD)</p>
                    </div>
                    <div class="col-3">
                        <input type="number" value="{{ intval($order->bid_maintain_gurantee) }}"  class="select" name="bid_maintain_gurantee" required />
                    </div>
                </div>
            </div>



            <div class="text-center justify-end mt-4">


                <button class="ml-4 text-white btn-lg mb-4" type="submit" style="background:rgb(18, 21, 179); colour:white">
                    {{ __('Update') }}
                </button>
            </div>



        </div>






</div>



@endsection
