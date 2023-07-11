@extends('admin.layout.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/buyer_main_css.css') }}" />
<script src="{{ asset('js/buyerConfig.js') }}" defer></script>


<div class="container mt-4" style="border: 1px solid #3e3e3d">



    {{-- session error messages --}}

    @include('components.additional.adminError')

    {{-- end of the error messages --}}



   
    <div class="header border-bottom mt-2">
      <p> Editing: {{ $order->supply_point_name }} </p>

       
      </div>



<form action="{{ route('superadmin_order_update') }}" method="post" enctype="multipart/form-data" id="natural_bid_add_form">  

    @csrf

      <div class="d-flex flex-column">
        <div>

          <input type="text" name="purchase_request_for" value="NATURAL GAS" hidden required>
          <input type="text" name="order_hidden_id" id="" value="{{ $order->id }}" hidden required>


          
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
                <p>Natural Gas Distributor POINT OF CONSUMPTION 1:</p>
              </div>


                    @php
                      $selectedConsumption = $order->natural_gas_point_of_distribution_consumtion_1;
                    @endphp


              <div class="col-3">
                <select class="select" name="natural_gas_point_of_distribution_consumtion_1">
                  <option value="Metrogas Metropolitan Subzone" {{ $selectedConsumption == 'Metrogas Metropolitan Subzone' ? 'selected' : '' }}>
                    Metrogas Metropolitan Subzone
                  </option>
                  
                  <option value="Naturgy BAN SA Subzone Buenos Aires North" {{ $selectedConsumption == 'Naturgy BAN SA Subzone Buenos Aires North' ? 'selected' : '' }}>
                    Naturgy BAN SA Subzone Buenos Aires North
                  </option>
                  
                  <option value="Camuzzi Gas Pampeana Subzone Buenos Aires" {{ $selectedConsumption == 'Camuzzi Gas Pampeana Subzone Buenos Aires' ? 'selected' : '' }}>
                    Camuzzi Gas Pampeana Subzone Buenos Aires
                  </option>
                  
                  <option value="Camuzzi Gas Bahía Blanca Subzone" {{ $selectedConsumption == 'Camuzzi Gas Bahía Blanca Subzone' ? 'selected' : '' }}>
                    Camuzzi Gas Bahía Blanca Subzone
                  </option>
                  
                  <option value="Camuzzi Gas La Pampa North Subzone" {{ $selectedConsumption == 'Camuzzi Gas La Pampa North Subzone' ? 'selected' : '' }}>
                    Camuzzi Gas La Pampa North Subzone
                  </option>
                  
                  <option value="Camuzzi Gas La Pampa South Subzone" {{ $selectedConsumption == 'Camuzzi Gas La Pampa South Subzone' ? 'selected' : '' }}>
                    Camuzzi Gas La Pampa South Subzone
                  </option>
                  
                  <option value="Camuzzi Gas del Sur Subzone Neuquén" {{ $selectedConsumption == 'Camuzzi Gas del Sur Subzone Neuquén' ? 'selected' : '' }}>
                    Camuzzi Gas del Sur Subzone Neuquén
                  </option>
                  
                  <option value="Camuzzi Gas del Sur Cordillerano Subzone" {{ $selectedConsumption == 'Camuzzi Gas del Sur Cordillerano Subzone' ? 'selected' : '' }}>
                    Camuzzi Gas del Sur Cordillerano Subzone
                  </option>
                  
                  <option value="Camuzzi Gas del Sur Subzone Buenos Aires South" {{ $selectedConsumption == 'Camuzzi Gas del Sur Subzone Buenos Aires South' ? 'selected' : '' }}>
                    Camuzzi Gas del Sur Subzone Buenos Aires South
                  </option>
                  
                  <option value="Camuzzi Gas del Sur Subzone Chubut Sur" {{ $selectedConsumption == 'Camuzzi Gas del Sur Subzone Chubut Sur' ? 'selected' : '' }}>
                    Camuzzi Gas del Sur Subzone Chubut Sur
                  </option>
                  
                  <option value="Camuzzi Gas del Sur Subzone Santa Cruz Sur" {{ $selectedConsumption == 'Camuzzi Gas del Sur Subzone Santa Cruz Sur' ? 'selected' : '' }}>
                    Camuzzi Gas del Sur Subzone Santa Cruz Sur
                  </option>
                  
                  <option value="Camuzzi Gas del Sur Subzone Tierra del Fuego" {{ $selectedConsumption == 'Camuzzi Gas del Sur Subzone Tierra del Fuego' ? 'selected' : '' }}>
                    Camuzzi Gas del Sur Subzone Tierra del Fuego
                  </option>
                  
                  <option value="Cuyana Gas Distributor Cuyo Subzone" {{ $selectedConsumption == 'Cuyana Gas Distributor Cuyo Subzone' ? 'selected' : '' }}>
                    Cuyana Gas Distributor Cuyo Subzone
                  </option>
                  
                  <option value="Cuyana Gas Distributor Malargüe Subzone" {{ $selectedConsumption == 'Cuyana Gas Distributor Malargüe Subzone' ? 'selected' : '' }}>
                    Cuyana Gas Distributor Malargüe Subzone
                  </option>
                  
                  <option value="Gas Distributor of the Center Subzone Center" {{ $selectedConsumption == 'Gas Distributor of the Center Subzone Center' ? 'selected' : '' }}>
                    Gas Distributor of the Center Subzone Center
                  </option>
                  
                  <option value="Litoral Gas Subzone Litoral" {{ $selectedConsumption == 'Litoral Gas Subzone Litoral' ? 'selected' : '' }}>
                    Litoral Gas Subzone Litoral
                  </option>
                  
                  <option value="Gasnor Subzone Salta" {{ $selectedConsumption == 'Gasnor Subzone Salta' ? 'selected' : '' }}>
                    Gasnor Subzone Salta
                  </option>
                  
                  <option value="Gasnor Subzone Tucumán" {{ $selectedConsumption == 'Gasnor Subzone Tucumán' ? 'selected' : '' }}>
                    Gasnor Subzone Tucumán
                  </option>
                  
                  <option value="Gasnea Entre Ríos Subzone" {{ $selectedConsumption == 'Gasnea Entre Ríos Subzone' ? 'selected' : '' }}>
                    Gasnea Entre Ríos Subzone
                  </option>
                  
                  <option value="Gasnea Subzone Paraná" {{ $selectedConsumption == 'Gasnea Subzone Paraná' ? 'selected' : '' }}>
                    Gasnea Subzone Paraná
                  </option>
                  
                  <option value="Gasnea Subzone Corrientes" {{ $selectedConsumption == 'Gasnea Subzone Corrientes' ? 'selected' : '' }}>
                    Gasnea Subzone Corrientes
                  </option>
                  
                  <option value="Gasnea Chaco Subzone" {{ $selectedConsumption == 'Gasnea Chaco Subzone' ? 'selected' : '' }}>
                    Gasnea Chaco Subzone
                  </option>
                  
                  <option value="Gasnea Subzone Formosa" {{ $selectedConsumption == 'Gasnea Subzone Formosa' ? 'selected' : '' }}>
                    Gasnea Subzone Formosa
                  </option>
                  
                  <option value="Gasnea Subzone Misiones" {{ $selectedConsumption == 'Gasnea Subzone Misiones' ? 'selected' : '' }}>
                    Gasnea Subzone Misiones
                  </option>
                  
                
                </select>
              </div>
            </div>
          </div>


          <div class="form-group mt-3 mb-4">
            <div class="row align-items-center">
              <div class="col-4">
                <p>Natural Gas Tariff POINT OF CONSUMPTION 1</p>
              </div>
              <div class="col-3">
                <select class="select" name="natural_gas_tarrif_point_of_consumption_1">

                  @php
                    $selectedtarrfiConsumption = $order->natural_gas_tarrif_point_of_consumption_1;
                  @endphp

                  <option value="SGP3" {{ $selectedtarrfiConsumption == 'SGP3' ? 'selected' : '' }} >SGP3</option>
                  <option value="SGG"  {{ $selectedtarrfiConsumption == 'SGG' ? 'selected' : '' }} >SGG</option>
                  <option value="CNG"  {{ $selectedtarrfiConsumption == 'CNG' ? 'selected' : '' }} >CNG</option>
                  <option value="GU"  {{ $selectedtarrfiConsumption == 'GU' ? 'selected' : '' }} > GU</option>
                </select>
              </div>
              <div class="col-4">
                <div class="row align-items-center">
                  <div class="col-6">
                    <p>RESERVE (dam3/day) </p>
                  </div>
                  <div class="col-6">
                    <input type="text" value="{{ intval($order->reserve) }}" class="select py-2" name="reserve" required />
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          






          <span class="border-bottom  mb-4 mt-4 p-2"> Consumption Curve POINT OF CONSUMPTION 1 </span>
          

          
          <div class="form-group mt-3">
            <div class="row">
              <div class="col-4">
                <p>Enero</p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_january) }}" class="select py-2" name="expected_january" required />
              </div>
            </div>
          </div>



          
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Febrero </p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_february) }}" class="select py-2" name="expected_february" required />
              </div>
            </div>
          </div>


          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Marzo </p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_march) }}" class="select py-2" name="expected_march"  required/>
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Abril </p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_april) }}" class="select py-2" name="expected_april" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Mayo</p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_may) }}" class="select py-2" name="expected_may" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Junio </p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_june) }}" class="select py-2" name="expected_june" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Julio</p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_july) }}" class="select py-2" name="expected_july" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Agosto</p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_august) }}" class="select py-2" name="expected_august" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Septiembre</p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_september) }}" class="select py-2" name="expected_september" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Octubre </p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_october) }}" class="select py-2" name="expected_october" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Noviembre</p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_november) }}" class="select py-2" name="expected_november" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Diciembre</p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->expected_december) }}" class="select py-2" name="expected_december" required />
            </div>
        </div>
      </div>




        <div class="mt-4 mb-4">
          <span class="border-bottom ">Contract Conditions:</span>
        </div>
  
          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Contract Term (months)</p>
              </div>
              <div class="col-3">
                <input type="number" value="{{ intval($order->contact_term_months) }}" class="select py-2" name="contact_term_months" required />
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



    


 
          <div class="mt-4 mb-4">
            <span class="border-bottom ">Cuenca Winter Mix:</span>
          </div>


          <div class="form-group mt-3">
            <div class="row">
              <div class="col-4">
                <p>NQN:</p>
              </div>
              <div class="col-3">
                <input type="number" value="{{ intval($order->winter_mqn) }}" class="select py-2" max="100" name="winter_mqn" id="summer_1" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>PTO:</p>
              </div>
              <div class="col-3">
                <input type="number" value="{{ intval($order->winter_pto) }}" class="select py-2" name="winter_pto" id="summer_2" required  />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>SCR:</p>
              </div>
              <div class="col-3">
                <input type="number" value="{{ intval($order->winter_scr) }}" class="select py-2" max="100" name="winter_scr" id="summer_3" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>CHU:</p>
              </div>
              <div class="col-3">
                <input type="number"  value="{{ intval($order->winter_chu) }}" class="select py-2"  max="100" name="winter_chu" id="summer_4" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>NOA:</p>
              </div>
              <div class="col-3">
                <input type="number" value="{{ intval($order->winter_noa) }}" class="select py-2"  max="100" name="winter_noa" id="summer_5" required />
              </div>
            </div>
          </div>

          
          <div class="mt-4 mb-4">
            <span class="border-bottom ">Cuencas Summer Mix</span>
          </div>



          <div class="form-group mt-3">
            <div class="row">
              <div class="col-4">
                <p>NQN:</p>
              </div>
              <div class="col-3">
                <input type="number" value="{{ intval($order->summer_mqn) }}" class="select py-2"   max="100" name="summer_mqn" id="winter_1" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>PTO:</p>
              </div>
              <div class="col-3">
                <input type="number" value="{{ intval($order->summer_pto) }}" class="select py-2" name="summer_pto" id="winter_2" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>SCR:</p>
              </div>
              <div class="col-3">
                <input type="number" value="{{ intval($order->summer_scr) }}"   class="select py-2"  max="100" name="summer_scr" id="winter_3" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>CHU:</p>
              </div>
              <div class="col-3">
                <input type="number" value="{{ intval($order->summer_chu) }}" class="select py-2"  max="100" name="summer_chu" id="winter_4" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>NOA:</p>
              </div>
              <div class="col-3">
                <input type="number" value="{{ intval($order->summer_noa) }}" class="select py-2"  max="100" name="summer_noa" id="winter_5" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Type of Supply:</p>
              </div>
              <div class="col-3 d-flex">
                <div class="pr-4">
                  <input
                    type="radio"
                    value="Firm"
                    id="Firm"
                    name="type_of_supply"
                    required

                  @if($order->type_of_supply == 'Firm')
                    checked
                  @endif


                  />
                  <label for="Firm">Firm</label>
                </div>
                <div>
                  <input
                    type="radio"
                    value="Spot"
                    id="Spot"
                    name="type_of_supply"
                    required


                    @if($order->type_of_supply == 'Spot')
                    checked
                  @endif

                  />
                  <label for="Spot">Spot</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Exclusivity:</p>
              </div>
              <div class="col-3">
                <select class="select" name="exclusivity" required>

                  @if($order->exclusivity == 'YES')
                          
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
                <p>Partial Award:</p>
              </div>
              <div class="col-3">
                <select class="select" name="partial_award" required>


                  @if($order->partial_award == 'YES')
                          
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
                <p>Price:</p>
              </div>
              <div class="col-3">
                <select class="select" name="price" required>


                  @if($order->price == 'Flat')
    


                  <option value="Flat" selected>Flat</option>
                  <option value="Seasonal">Seasonal</option>

                  @else

                  <option value="Flat">Flat</option>
                  <option value="Seasonal" selected>Seasonal</option>

                @endif



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
          <span class="border-bottom"
            >In case the previous answer is NO:
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
          <div class="form-group mt-2 border-bottom">
            <div class="row">
              <div class="col-4">
                <p>Take or Pay Price:</p>
              </div>
              <div class="col-3">
                <input type="text" value="{{ $order->take_or_pay_price }}" class="select" name="take_or_pay_price" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Optional Delivery or Pay to the Seller:</p>
              </div>
              <div class="col-3">
                <select class="select" name="optional_delivery_to_seller" required>
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
          <span class="border-bottom"
            >In case the previous answer is NO:
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
          <div class="form-group mt-2 border-bottom">
            <div class="row">
              <div class="col-4">
                <p>Delivery or Pay price:</p>
              </div>
              <div class="col-3">
                <input type="text" value="{{ $order->delivery_or_pay_price }}"  class="select" name="delivery_or_pay_price" />
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




          
          <div class="text-center justify-end m-6 ">
           

            <button class="ml-4 text-white btn-lg mb-4" type="button" style="background:rgb(18, 21, 179); colour:white" id="submitButton">
                {{ __('Update') }}
            </button>


        </div>

          <!-- Group -->
        </div>
   

    </form>

</div>




</div>



<script>
document.getElementById("submitButton").addEventListener("click", function() {


  var inputs = document.getElementsByTagName("input");

  var filled = true;
  
  for (var i = 0; i < inputs.length; i++) {
    if (inputs[i].value == "") {
      filled = false;
      break;
    }
  }
  
  if (!filled) {
    alert("Please fill in all fields");
    return false;
  }



  const summer_1 = parseInt(elementFinder('summer_1').value);
  const summer_2 = parseInt(elementFinder('summer_2').value);
  const summer_3 = parseInt(elementFinder('summer_3').value);
  const summer_4 = parseInt(elementFinder('summer_4').value);
  const summer_5 = parseInt(elementFinder('summer_5').value);


  const sumOfTheSummer = summer_1 + summer_2 + summer_3 + summer_4 + summer_5;

  if (sumOfTheSummer == 100) {
    console.log("numberrs are equal to 100");
  }else {
    alert("value of Winter NQN, PTO, SCR,CHU and NOA are not equal to 100")
    return false 
  }


  const winter_1 = parseInt(elementFinder('winter_1').value);
  const winter_2 = parseInt(elementFinder('winter_2').value);
  const winter_3 = parseInt(elementFinder('winter_3').value);
  const winter_4 = parseInt(elementFinder('winter_4').value);
  const winter_5 = parseInt(elementFinder('winter_5').value);



  const sumOfTheWinter = winter_1 + winter_2 + winter_3 + winter_4 + winter_5;

  if (sumOfTheWinter == 100) {
    console.log("numberrs are equal to 100");
  }else {
    alert("value of Summer NQN, PTO, SCR,CHU and NOA are not equal to 100")
    return false 
  }



  elementFinder("natural_bid_add_form").submit();
 

});

function elementFinder(id) {
  return document.getElementById(id)




  

}





</script>


@endsection