@extends('buyer.layout.app')

@section('content')

    
<div class="container mt-4" style="border: 1px solid #3e3e3d">


{{-- session error messages --}}

@include('components.additional.errorMessages')
{{-- end of the error messages --}}



   
<div class="header border-bottom mt-2">
    <p> Agregar Pedido Energía Eléctrica  </p>

</div>


<form action="{{ route('bidAdd') }}" method="post" enctype="multipart/form-data">  

    @csrf

    <div class="d-flex flex-column">


        <input type="text" name="purchase_request_for" id="" value="ELECTRICITY" hidden>

          
        <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Nombre del Punto de Suministro </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="supply_point_name" required />
              </div>
            </div>
          </div>



          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Ubicación </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="location_of_supply_point" required />
              </div>
            </div>
          </div>



          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Fecha Máxima Recepción de Ofertas</p>
              </div>
              <div class="col-3">
                <input type="datetime-local" class="select" name="deadline_offer_recive" required />
              </div>
            </div>
          </div>



          
          <div class="form-group">
            <div class="row">
              <div class="col-4">
                <p>Fecha de Adjudicación</p>
              </div>
              <div class="col-3">
                <input type="datetime-local" class="select" name="publication_date" required />
              </div>
            </div>
          </div>




          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p> Distribuidora de Energía Eléctrica </p>
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
                <p>Categoría de Usuario </p>
              </div>
              <div class="col-3">
                <select class="select" name="user_category_point_of_consumption" required>
                  <option value="Distributor 300 KW">	Usuario Distribuidora Menor 300 kW</option>
                  <option value="GUDI">GUDI</option>
                  <option value="GUME">GUME</option>
                  <option value="GUM">GUMA</option>
                </select>
              </div>
            </div>
          </div>




          <span class="border-bottom  mb-3 mt-4 p-2"> Demanda Esperada en MWh </span>



          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Enero</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_january" required />
              </div>
            </div>
          </div>



          
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Febrero </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_february"  required/>
              </div>
            </div>
          </div>


          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Marzo </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_march" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Abril </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_april" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Mayo</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_may" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Junio </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_june"  required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Julio</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_july" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Agosto</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_august" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Septiembre</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_september" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Octubre </p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_october" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Noviembre</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_november" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Diciembre</p>
              </div>
              <div class="col-3">
                <input type="text" class="select py-2" name="expected_december" required />
            </div>
        </div>
      </div>




      <span class="border-bottom">Condiciones Contractuales :</span>
          

      <div class="form-group mt-4">
        <div class="row">
          <div class="col-4">
            <p>Plazo del Contrato (meses)</p>
          </div>
          <div class="col-3">
            <input type="number" class="select py-2" name="contact_term_months" required />
          </div>
        </div>
      </div>


        <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p> Inicio de Suministro </p>
              </div>
              <div class="col-3">
                <input type="date" class="select" name="start_of_supply" />
              </div>
            </div>
          </div>



      

          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p> Prioridad Asignada al Acuerdo (1 a 20) </p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="priority_given_to_agreement" min="1" max="20" required  />
              </div>
            </div>
          </div>

          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Adjudicación Parcial</p>
              </div>
              <div class="col-3">
                <select class="select" name="partial_award" required>
                  <option value="YES">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>
          </div>


          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Cláusula de Renegociación de Precio</p>
              </div>
              <div class="col-3">
                <select class="select" name="price_renegotiation" required>
                  <option value="YES">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>
          </div>



          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Cláusula de Terminación Anticipada</p>
              </div>
              <div class="col-3">
                <select class="select" name="early_termination" required>
                  <option value="YES">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>
          </div>



          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Take or Pay Opcional para el Vendedor</p>
              </div>
              <div class="col-3">
                <select class="select" name="take_or_pay_optional_to_seller" required>
                  <option value="YES">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>
          </div>


          <span class="border-bottom"
          >En caso de responder NO:
        </span>


        <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Take or Pay (0 a 100%) </p>
              </div>
              <div class="col-3">
                <input type="number" min="0" max="100" class="select" name="take_or_pay_percentage" />
              </div>
            </div>
          </div>


          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Delivery or Pay Opcional para el Vendedor</p>
              </div>
              <div class="col-3">
                <select class="select" name="optional_delivery_to_seller">
                  <option value="YES">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>
          </div>


          <span class="border-bottom"
          >En caso de responder NO: 
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
                <p>Plazo de Pago (5 a 180 días)</p>
              </div>
              <div class="col-3">
                <input type="number" class="select" name="payment_term" min="5" max="180" required />
              </div>
            </div>
          </div>



          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Tipo de Cambio </p>
              </div>
              <div class="col-3">
                <select class="select" name="exchange_rate" required>
                  <option value="BNA Ticket Seller">BNA Divisa Vendedor</option>
                  <option value="BNA Currency Seller">
                    BNA Billete Vendedor
                  </option>
                  <option value="ARS">ARS</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Intereses para deudas en USD</p>
              </div>
              <div class="col-3">
                <input type="number" class="select" name="default_rates_debts" required />
              </div>
            </div>
          </div>


          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p> Intereses para dudas en ARS</p>
              </div>
              <div class="col-3">
                <input type="number" class="select" name="mortage_rate_debts" required />
              </div>
            </div>
          </div>


          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Comisión Subasta</p>
              </div>
              <div class="col-3">
                <select class="select" name="auction_commision" required>
                  <option value="Paid by the Buyer">A cargo del Comprador</option>
                  <option value="Paid by the Seller">
                    A cargo del Vendedor
                  </option>
                  <option value="Paid by Both Parties">
                    A cargo de Ambas Partes
                  </option>
                </select>
              </div>
            </div>
          </div>


          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Garantía Mantenimiento de Oferta (USD)</p>
              </div>
              <div class="col-3">
                <input type="number" class="select" name="bid_maintain_gurantee" required />
              </div>
            </div>
          </div>


                    
          <div class="flex items-center justify-end mt-4">
           

            <x-button class="ml-4" type="submit" style="background:rgb(18, 21, 179); colour:white">
                {{ __('Publicar Pedido de Compra') }}
            </x-button>
        </div>

        

    </div>





  
</div>



@endsection