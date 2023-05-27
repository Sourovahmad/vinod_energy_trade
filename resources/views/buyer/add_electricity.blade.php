@extends('buyer.layout.app')

@section('content')

    
<div class="container mt-4" style="border: 1px solid #3e3e3d">


{{-- session error messages --}}

@include('components.additional.errorMessages')
{{-- end of the error messages --}}



   
<div class="header border-bottom mt-2">
    <p>  Add Electric Energy bid </p>

</div>


<form action="{{ route('bidAdd') }}" method="post" enctype="multipart/form-data">  

    @csrf

    <div class="d-flex flex-column">


        <input type="text" name="purchase_request_for" id="" value="ELECTRICITY" hidden>

          
        <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Supply Point Name</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="supply_point_name" required />
              </div>
            </div>
          </div>



          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Geographic Location (Province location)</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="location_of_supply_point" required />
              </div>
            </div>
          </div>



          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Deadline for receipt of Offers:</p>
              </div>
              <div class="col-3">
                <input type="datetime-local" class="select" name="deadline_offer_recive" required />
              </div>
            </div>
          </div>



          
          <div class="form-group">
            <div class="row">
              <div class="col-4">
                <p>Date of publication of the Purchase Order:</p>
              </div>
              <div class="col-3">
                <input type="datetime-local" class="select" name="publication_date" required />
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

                 
                  <option value="EDESUR (Distributor of Energia Sur SA)">
                    EDESUR (Distributor of Energia Sur SA)
                  </option>
                  <option value="EDENOR (Distributor and Marketer of Energia Norte SA)">
                    EDENOR (Distributor and Marketer of Energia Norte SA)
                  </option>
                  <option value="EDEA (Atlantic Energy Distribution Company SA)">
                    EDEA (Atlantic Energy Distribution Company SA)
                  </option>
                  <option value="EDEN (North Energy Distribution Company SA)">
                    EDEN (North Energy Distribution Company SA)
                  </option>
                  <option value="EDES (Energy South SA Distribution Company)">
                    EDES (Energy South SA Distribution Company)
                  </option>
                  <option value="EDELAP (La Plata SA Distribution Company)">
                    EDELAP (La Plata SA Distribution Company)
                  </option>
                  <option value="ECS.APEM Energy Catamarca SAPEM (Anonymous Company with Majority State Participation)">
                    ECS.APEM Energy Catamarca SAPEM (Anonymous Company with Majority State Participation)
                  </option>
                  <option value="SECHEEP (Energy Services of Chaco Provincial State Company)">
                    SECHEEP (Energy Services of Chaco Provincial State Company)
                  </option>
                  <option value="EPEC (Provincial Energy Company of Córdoba SA)">
                    EPEC (Provincial Energy Company of Córdoba SA)
                  </option>
                  <option value="DPEC (Provincial Directorate of Energy of Corrientes SA)">
                    DPEC (Provincial Directorate of Energy of Corrientes SA)
                  </option>
                  <option value="ENERSA SA (Energy of Entre Ríos SA)">
                    ENERSA SA (Energy of Entre Ríos SA)
                  </option>
                  <option value="Formosa Electric Resources and Energy Service (REFSA SA)">
                    Formosa Electric Resources and Energy Service (REFSA SA)
                  </option>
                  <option value="EJE SA (Empresa Jujeña De Energía SA)">
                    EJE SA (Empresa Jujeña De Energía SA)
                  </option>
                  <option value="APE (Pampa Provincial Energy Administration)">
                    APE (Pampa Provincial Energy Administration)
                  </option>
                  <option value="EDELAR (Electricity Distribution Company of La Rioja SA)">
                    EDELAR (Electricity Distribution Company of La Rioja SA)
                  </option>
                  <option value="EDEMSA (Electricity Distribution Company of Mendoza SA)">
                    EDEMSA (Electricity Distribution Company of Mendoza SA)
                  </option>
                  <option value="EDETE SA (Eastern Electricity Distribution Company SA)">
                    EDETE SA (Eastern Electricity Distribution Company SA)
                  </option>
                  <option value="EMSA (Electricity of Misiones SA)">
                    EMSA (Electricity of Misiones SA)
                  </option>
                  <option value="EPEN (Neuquén Provincial Energy Entity)">
                    EPEN (Neuquén Provincial Energy Entity)
                  </option>
                  <option value="EDERSA (Energy Company of Rio Negro SA)">
                    EDERSA (Energy Company of Rio Negro SA)
                  </option>
                  <option value="EDESA (Electricity Distribution Company of Salta)">
                    EDESA (Electricity Distribution Company of Salta)
                  </option>
                  <option value="ESJ SA (Energy San Juan SA)">
                    ESJ SA (Energy San Juan SA)
                  </option>
                  <option value="EDESAL SA (Distribution Company San Luis SA)">
                    EDESAL SA (Distribution Company San Luis SA)
                  </option>
                  <option value="EPESF (Provincial Energy Company of Santa Fe SA)">
                    EPESF (Provincial Energy Company of Santa Fe SA)
                  </option>


                  <option value="EDESE (Electricity Distribution Company of Santiago del Estero SA)">
                    EDESE (Electricity Distribution Company of Santiago del Estero SA)
                  </option>


                  <option value="EDET (Electrical Distribution Company of Tucumán SA)">
                    	EDET (Electrical Distribution Company of Tucumán SA)
                  </option>



                  <option value="Other Distributor or Cooperative">
                    Other Distributor or Cooperative
                </option>


                
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
                  <option value="Distributor 300 KW">	Distributor 300 KW </option>
                  <option value="GUDI">GUDI</option>
                  <option value="GUME">GUME</option>
                  <option value="GUM">GUM</option>
                </select>
              </div>
            </div>
          </div>




          <span class="border-bottom  mb-3 mt-4 p-2"> Expected Consumption</span>



          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>January </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_january" required />
              </div>
            </div>
          </div>



          
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>February </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_february"  required/>
              </div>
            </div>
          </div>


          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>March</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_march" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>April</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_april" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>May</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_may" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>June</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_june"  required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>July</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_july" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>August</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_august" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>September</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_september" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>October</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_october" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>November</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_november" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>December</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_december" required />
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
            <input type="number" class="select py-2" name="contact_term_months" required />
          </div>
        </div>
      </div>


        <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Start of Supply:</p>
              </div>
              <div class="col-3">
                <input type="date" class="select" name="start_of_supply" />
              </div>
            </div>
          </div>



      

          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Priority Given To Agreement (1 to 20)</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="priority_given_to_agreement" min="1" max="20" required  />
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
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
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
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
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
                <select class="select" name="take_or_pay_optional_to_seller" required>
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


        <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Payment term (5 to 180 days):</p>
              </div>
              <div class="col-3">
                <input type="number" class="select" name="payment_term" min="5" max="180" required />
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
                <input type="number" class="select" name="default_rates_debts" required />
              </div>
            </div>
          </div>


          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Mortgage Rate Debts in Pesos:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select" name="mortage_rate_debts" required />
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
                <input type="number" class="select" name="bid_maintain_gurantee" required />
              </div>
            </div>
          </div>


                    
          <div class="flex items-center justify-end mt-4">
           

            <x-button class="ml-4" type="submit" style="background:rgb(18, 21, 179); colour:white">
                {{ __('Add') }}
            </x-button>
        </div>

        

    </div>





  
</div>



@endsection