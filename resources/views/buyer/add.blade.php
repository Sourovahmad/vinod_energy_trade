@extends('buyer.layout.app')

@section('content')

<div class="container mt-4" style="border: 1px solid #3e3e3d">
  



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





   
    <div class="header border-bottom mt-2">
      <p>   Add the bid </p>


       
      </div>



<form action="{{ route('bidAdd') }}" method="post" enctype="multipart/form-data">  

    @csrf

      <div class="d-flex flex-column">
        <div>


          
            <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Supply Point Name</p>
                  </div>
                  <div class="col-3">
                    <input type="text" class="select py-2" name="supply_point_name" />
                  </div>
                </div>
              </div>



              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Geographic Location (Province location)</p>
                  </div>
                  <div class="col-3">
                    <input type="text" class="select py-2" name="location_of_supply_point" />
                  </div>
                </div>
              </div>




          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Purchase Request for:</p>
              </div>
              <div class="col-3">
                <select class="select" name="purchase_request_for">
                  <option value="ELECTRICITY">ELECTRICITY</option>
                  <option value="NATURAL GAS">NATURAL GAS</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Deadline for receipt of Offers:</p>
              </div>
              <div class="col-3">
                <input type="datetime-local" class="select" name="deadline_offer_recive" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-4">
                <p>Date of publication of the Purchase Order:</p>
              </div>
              <div class="col-3">
                <input type="datetime-local" class="select" name="publication_date" />
              </div>
            </div>
          </div>
          <span class="border-bottom"
            >If you have selected a NATURAL GAS Purchase order:</span
          >
          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Natural Gas Distributor POINT OF CONSUMPTION 1:</p>
              </div>
              <div class="col-3">
                <select class="select" name="natural_gas_point_of_distribution_consumtion_1">
                  <option value="Metrogas Metropolitan Subzone">
                    Metrogas Metropolitan Subzone
                  </option>
                  <option value="Naturgy BAN SA Subzone Buenos Aires North">
                    Naturgy BAN SA Subzone Buenos Aires North
                  </option>
                  <option value="Camuzzi Gas Pampeana Subzone Buenos Aires">
                    Camuzzi Gas Pampeana Subzone Buenos Aires
                  </option>
                  <option value="Camuzzi Gas Bahía Blanca Subzone">
                    Camuzzi Gas Bahía Blanca Subzone
                  </option>
                  <option value="Camuzzi Gas La Pampa North Subzone">
                    Camuzzi Gas La Pampa North Subzone
                  </option>
                  <option value="Camuzzi Gas La Pampa South Subzone">
                    Camuzzi Gas La Pampa South Subzone
                  </option>
                  <option value="Camuzzi Gas del Sur Subzone Neuquén">
                    Camuzzi Gas del Sur Subzone Neuquén
                  </option>
                  <option value="Camuzzi Gas del Sur Cordillerano Subzone">
                    Camuzzi Gas del Sur Cordillerano Subzone
                  </option>
                  <option
                    value="Camuzzi Gas del Sur Subzone Buenos Aires South"
                  >
                    Camuzzi Gas del Sur Subzone Buenos Aires South
                  </option>
                  <option value="Camuzzi Gas del Sur Subzone Chubut Sur">
                    Camuzzi Gas del Sur Subzone Chubut Sur
                  </option>
                  <option value="Camuzzi Gas del Sur Subzone Santa Cruz Sur">
                    Camuzzi Gas del Sur Subzone Santa Cruz Sur
                  </option>
                  <option
                    value="Camuzzi Gas del Sur Subzone Tierra del Fuego"
                  >
                    Camuzzi Gas del Sur Subzone Tierra del Fuego
                  </option>
                  <option value="Cuyana Gas Distributor Cuyo Subzone">
                    Cuyana Gas Distributor Cuyo Subzone
                  </option>
                  <option value="Cuyana Gas Distributor Malargüe Subzone">
                    Cuyana Gas Distributor Malargüe Subzone
                  </option>
                  <option
                    value="Gas Distributor of the Center Subzone Center"
                  >
                    Gas Distributor of the Center Subzone Center
                  </option>
                  <option value="Litoral Gas Subzone Litoral">
                    Litoral Gas Subzone Litoral
                  </option>
                  <option value="Gasnor Subzone Salta">
                    Gasnor Subzone Salta
                  </option>
                  <option value="Gasnor Subzone Tucumán">
                    Gasnor Subzone Tucumán
                  </option>
                  <option value="Gasnea Entre Ríos Subzone">
                    Gasnea Entre Ríos Subzone
                  </option>
                  <option value="Gasnea Subzone Paraná">
                    Gasnea Subzone Paraná
                  </option>
                  <option value="Gasnea Subzone Corrientes">
                    Gasnea Subzone Corrientes
                  </option>
                  <option value="Gasnea Chaco Subzone">
                    Gasnea Chaco Subzone
                  </option>
                  <option value="Gasnea Subzone Formosa">
                    Gasnea Subzone Formosa
                  </option>
                  <option value="Gasnea Subzone Misiones">
                    Gasnea Subzone Misiones
                  </option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <div class="row">
              <div class="col-4">
                <p>Natural Gas Tariff POINT OF CONSUMPTION 1</p>
              </div>
              <div class="col-3">
                <select class="select" name="natural_gas_tarrif_point_of_consumption_1">
                  <option value="SGP3">SGP3</option>
                  <option value="SGG">SGG</option>
                  <option value="CNG">CNG</option>
                  <option value="GU">GU</option>
                </select>
              </div>
            </div>
          </div>



          <span class="h6 p-2 mb-3">If you have selected SGG or GU: </span> <br>


          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>RESERVE (dam3/day) </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="reserve" />
              </div>
            </div>
          </div>






          <span class="border-bottom  mb-3 mt-4 p-2"> Consumption Curve POINT OF CONSUMPTION 1 </span>
          

          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>January </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_january" />
              </div>
            </div>
          </div>



          
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>February </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_february" />
              </div>
            </div>
          </div>


          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>March</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_march" />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>April</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_april" />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>May</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_may" />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>June</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_june" />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>July</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_july" />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>August</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_august" />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>September</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_september" />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>October</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_october" />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>November</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_november" />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>December</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_december" />
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
                <input type="number" class="select py-2" name="contact_term_months" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Start of Supply:</p>
              </div>
              <div class="col-3">
                <input type="date" class="select" name="start_of_supplystart_of_supply" />
              </div>
            </div>
          </div>



          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Total Quantity:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="total_quantity" />
              </div>
            </div>
          </div>



          <span class="border-bottom">Cuenca Winter Mix:</span>
          <div class="form-group mt-3">
            <div class="row">
              <div class="col-4">
                <p>NQN:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" max="100" name="winter_mqn" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>PTO:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="winter_pto"  />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>SCR:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" max="100" name="winter_scr" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>CHU:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"  max="100" name="winter_chu" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>NOA:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"  max="100" name="winter_noa" />
              </div>
            </div>
          </div>
          <span class="border-bottom">Cuencas Summer Mix: </span>
          <div class="form-group mt-3">
            <div class="row">
              <div class="col-4">
                <p>NQN:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"   max="100" name="summer_mqn" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>PTO:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="summer_pto" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>SCR:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"  max="100" name="summer_scr" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>CHU:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"  max="100" name="summer_chu" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>NOA:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"  max="100" name="summer_noa" />
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
                  />
                  <label for="Firm">Firm</label>
                </div>
                <div>
                  <input
                    type="radio"
                    value="Spot"
                    id="Spot"
                    name="type_of_supply"
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
                <select class="select" name="exclusivity">
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
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
                <select class="select" name="partial_award">
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
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
                <select class="select" name="price">
                  <option value="Flat">Flat</option>
                  <option value="Seasonal">Seasonal</option>
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
                <select class="select" name="price_renegotiation">
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
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
                <select class="select" name="take_or_pay_optional_to_seller">
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
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
                <input type="number" min="0" max="100" class="select" name="take_or_pay_percentage" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2 border-bottom">
            <div class="row">
              <div class="col-4">
                <p>Take or Pay Price:</p>
              </div>
              <div class="col-3">
                <input type="text" class="select" name="take_or_pay_price" />
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
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
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
                <input type="number" min="0" max="100" class="select" name="delivery_or_pay" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2 border-bottom">
            <div class="row">
              <div class="col-4">
                <p>Delivery or Pay price:</p>
              </div>
              <div class="col-3">
                <input type="text" class="select" name="delivery_or_pay_price" />
              </div>
            </div>
          </div>
          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Payment term (5 to 180 days):</p>
              </div>
              <div class="col-3">
                <input type="number" class="select" name="payment_term" min="5" max="180" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Exchange Rate:</p>
              </div>
              <div class="col-3">
                <select class="select" name="exchange_rate">
                  <option value="BNA Ticket Seller">BNA Ticket Seller</option>
                  <option value="BNA Currency Seller">
                    BNA Currency Seller
                  </option>
                  <option value="ARS">ARS</option>
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
                <input type="number" class="select" name="default_rates_debts" />
              </div>
            </div>
          </div>
          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Mortgage Rate Debts in Pesos:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select" name="mortage_rate_debts" />
              </div>
            </div>
          </div>

          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Auction Commission:</p>
              </div>
              <div class="col-3">
                <select class="select" name="auction_commision">
                  <option value="Paid by the Buyer">Paid by the Buyer</option>
                  <option value="Paid by the Seller">
                    Paid by the Seller
                  </option>
                  <option value="Paid by Both Parties">
                    Paid by Both Parties
                  </option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Bid Maintenance Guarantee (Amount in ARS or USD):</p>
              </div>
              <div class="col-3">
                <input type="number" class="select" name="bid_maintain_gurantee" />
              </div>
            </div>
          </div>




          
          <div class="flex items-center justify-end mt-4">
           

            <x-button class="ml-4" type="submit" style="background:rgb(18, 21, 179); colour:white">
                {{ __('Add') }}
            </x-button>
        </div>

          <!-- Group -->
        </div>
   

    </form>

</div>




</div>


@endsection