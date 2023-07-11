@extends('buyer.layout.app')

@section('content')

<div class="container mt-4" style="border: 1px solid #3e3e3d">
  



{{-- session error messages --}}

@include('components.additional.errorMessages')
{{-- end of the error messages --}}


   
    <div class="header border-bottom mt-2">
      <p>  Agregar Pedido Gas Natural </p>
       
      </div>



<form action="{{ route('bidAdd') }}" method="post" enctype="multipart/form-data" id="natural_bid_add_form">  

    @csrf

      <div class="d-flex flex-column">
        <div>


          
            <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Nombre del Punto de Suministro</p>
                  </div>
                  <div class="col-3">
                    <input type="text" class="select py-2" name="supply_point_name" required  id="input_supply_point_name"/>
                  </div>
                </div>
              </div>



              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Ubicación </p>
                  </div>
                  <div class="col-3">
                    <input type="text" class="select py-2" name="location_of_supply_point" id="input_location" required />
                  </div>
                </div>
              </div>


              <input type="text" name="purchase_request_for" value="NATURAL GAS" hidden required>




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
                <p>Distribuidor de Gas Natural </p>
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


          <div class="form-group mt-3 mb-4">
            <div class="row align-items-center">
              <div class="col-4">
                <p>Tarifa </p>
              </div>
              <div class="col-3">
                <select class="select" name="natural_gas_tarrif_point_of_consumption_1">
                  <option value="SGP3">SGP3</option>
                  <option value="SGG">SGG</option>
                  <option value="CNG">CNG</option>
                  <option value="GU">GU</option>
                </select>
              </div>
              <div class="col-4">
                <div class="row align-items-center">
                  <div class="col-6">
                    <p>Reserva (m3/día)</p>
                  </div>
                  <div class="col-6">
                    <input type="text" class="select py-2" name="reserve" required />
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          






          <span class="border-bottom  mb-4 mt-4 p-2"> : Demanda Estimada  </span>
          

          
          <div class="form-group mt-3">
            <div class="row">
              <div class="col-4">
                <p>Enero</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_january" required />
              </div>
            </div>
          </div>



          
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Febrero </p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_february" required />
              </div>
            </div>
          </div>


          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Marzo </p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_march"  required/>
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Abril </p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_april" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Mayo</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_may" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Junio </p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_june" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Julio</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_july" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Agosto</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_august" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Septiembre</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_september" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Octubre </p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_october" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Noviembre</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_november" required />
              </div>
            </div>
          </div>
          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Diciembre</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="expected_december" required />
            </div>
        </div>
      </div>




        <div class="mt-4 mb-4">
          <span class="border-bottom ">Condiciones Contractuales </span>
        </div>
  
          <div class="form-group mt-4">
            <div class="row">
              <div class="col-4">
                <p>Plazo Contrato (meses)</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="contact_term_months" required />
              </div>
            </div>
          </div>


          
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p> Inicio de Suministro</p>
              </div>
              <div class="col-3">
                <input type="date" class="select" name="start_of_supply" required />
              </div>
            </div>
          </div>



    


 
          <div class="mt-4 mb-4">
            <span class="border-bottom ">Mix de Cuencas Invierno</span>
          </div>


          <div class="form-group mt-3">
            <div class="row">
              <div class="col-4">
                <p>NQN:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" max="100" name="winter_mqn" id="summer_1" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>TDF </p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="winter_pto" id="summer_2" required  />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>SCR:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" max="100" name="winter_scr" id="summer_3" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>CHU:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"  max="100" name="winter_chu" id="summer_4" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>NOA:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"  max="100" name="winter_noa" id="summer_5" required />
              </div>
            </div>
          </div>

          
          <div class="mt-4 mb-4">
            <span class="border-bottom ">Mix de Cuencas Verano</span>
          </div>



          <div class="form-group mt-3">
            <div class="row">
              <div class="col-4">
                <p>NQN:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"   max="100" name="summer_mqn" id="winter_1" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>PTO:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2" name="summer_pto" id="winter_2" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>SCR:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"  max="100" name="summer_scr" id="winter_3" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>CHU:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"  max="100" name="summer_chu" id="winter_4" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>NOA:</p>
              </div>
              <div class="col-3">
                <input type="number" class="select py-2"  max="100" name="summer_noa" id="winter_5" required />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Tipo de Suministro </p>
              </div>
              <div class="col-3 d-flex">
                <div class="pr-4">
                  <input
                    type="radio"
                    value="Firm"
                    id="Firm"
                    name="type_of_supply"
                    required
                  />
                  <label for="Firm">Firme </label>
                </div>
                <div>
                  <input
                    type="radio"
                    value="Spot"
                    id="Spot"
                    name="type_of_supply"
                    required
                  />
                  <label for="Spot">Spot</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Exclusividad </p>
              </div>
              <div class="col-3">
                <select class="select" name="exclusivity" required>
                  <option value="YES">SI</option>
                  <option value="NO">NO</option>
                </select>
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
                <p>Precio:</p>
              </div>
              <div class="col-3">
                <select class="select" name="price" required>
                  <option value="Flat">Plano </option>
                  <option value="Seasonal">Estacional</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Clausula de Renegociación de Precio</p>
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
                <p>Take or Pay Opcional para el Vendedor </p>
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
                <p>Precio Take or Pay</p>
              </div>
              <div class="col-3">
                <input type="text" class="select" name="take_or_pay_price" />
              </div>
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="row">
              <div class="col-4">
                <p>Delivery or Pay Opcional para el Vendedor</p>
              </div>
              <div class="col-3">
                <select class="select" name="optional_delivery_to_seller" required>
                  <option value="YES">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>
          </div>
          <span class="border-bottom"
            > En caso de responder NO: 
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
                <p>Precio Delivery or Pay </p>
              </div>
              <div class="col-3">
                <input type="text" class="select" name="delivery_or_pay_price" />
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
                  <option value="BNA Ticket Seller">BNA Divisa Vendedor </option>
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
                <p>Intereses para dudas en ARS</p>
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
                <p> Garantía Mantenimiento de Oferta (USD)</p>
              </div>
              <div class="col-3">
                <input type="number" class="select" name="bid_maintain_gurantee" required />
              </div>
            </div>
          </div>




          
          <div class="flex items-center justify-end mt-4">
           

            <x-button class="ml-4" type="button" style="background:rgb(18, 21, 179); colour:white" id="submitButton">
                {{ __('Publicar Pedido de Compra') }}
            </x-button>
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