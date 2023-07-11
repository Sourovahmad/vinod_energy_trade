@extends('layouts.app')
@section('content')


{{-- session error messages --}}

@include('components.additional.errorMessages')
{{-- end of the error messages --}}





<div class="justify-content-md-center row">
  <div class="col-xl-12 col-md-12 pl-4">
    <br />
    <div class="container-fluid">
      <div class="row justify-content-between">
        <div class="row ml-3 d-flex justify-content-between">
          <div aria-label="Basic example" role="group" class="btn-group">
            

            @if(!is_null(auth()->user()->last_year_average_trade_volume_of_natural_gas))
              
         

            <a  href="{{ route('add_electricity') }}" class="me-4">
              <button
                id="add_btn"
                
                type="button"
                class="btn btn-primary d-flex align-items-center w-auto"
              >
                <svg
                  class="svg_size mr-2"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M4 12H20M12 4V20"
                      stroke="#ffffff"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </g>
                </svg>
                Agregar Pedido Energía Eléctrica
              </button>
            </a>


            @endif



            
            @if(!is_null(auth()->user()->last_year_average_powersold_of_electric_engery))

        <a  href="{{ route('buyer_create') }}">
          <button
            id="add_btn"
            
            type="button"
            class="btn btn-primary d-flex align-items-center w-auto"
          >
            <svg
              class="svg_size mr-2"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
              <g
                id="SVGRepo_tracerCarrier"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></g>
              <g id="SVGRepo_iconCarrier">
                <path
                  d="M4 12H20M12 4V20"
                  stroke="#ffffff"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </g>
            </svg>
            Agregar Pedido Gas Natural
          </button>
        </a>


        @endif
            
            
          </div>
        </div>


        {{-- // add electriciy power --}}







      </div>
      <br />
      <div class="row">
        <div class="col-6">
          <h5 class="text text-secondary">Pedidos de Compra</h5>
        </div>
        
      </div>
    </div>

    <div class="container-fluid">
      <div class="justify-content-center row">
        <h5 class="text-success text-center mb-3">
          <br />
          Abierta
        </h5>
        <div class="row" style="width: 100%">
          <div class="text-center col-2" style="font-size: 10px">
            <b>ID</b>
          </div>


          <div class="text-center col" style="font-size: 10px">
            <b>Nombre </b>
          </div>


      

          <div class="text-center col-1" style="font-size: 10px">
            <b>Fecha limite</b>
          </div>



           <div class="text-center col" style="font-size: 10px">
            <b>Acción </b>
          </div>

        
        </div>

        @forelse ($ordersOpen as $openOrder)
            
        
            
        
        <div
          class="shadow card border-primary"
          style="padding: 5px; width: 100%; cursor: pointer"
        >
          <div class="align-items-center row" style="font-size: 11px">
            <div class="text-center col-2"> {{ $openOrder->code }}</div>
            <div class="text-center col">{{ $openOrder->supply_point_name }}</div>
            @php
            $requestTime = $openOrder->deadline_offer_recive;
              $formattedTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTime)->format('F j, Y, g:i a');
            @endphp
            <div class="text-center col-1">{{  $formattedTime }} </div>



            <div class="text-center col" >
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_view{{ $openOrder->id }}">Ver</button>
             
                <button type="button" class="btn btn-danger btn-sm m-1" onclick="deleteTheOrder({{ $openOrder->id }})">Eliminar </button>
              </div>
            </div>

  




           {{-- open order modal --}}


            <div class="modal fade" id="modal_view{{ $openOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $openOrder->supply_point_name }} </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  {{-- modal body start --}}
                  @include('components.buyer.orderView', [
                    'openOrder' => $openOrder
                  ])

                  {{-- modal body end --}}
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>



            
          </div>
        </div>


        @empty



        <div
        class="shadow card border-primary"
        style="padding: 5px; width: 100%; cursor: pointer"
      >
        <div class="align-items-center row text-center" style="font-size: 11px">
            <div class="col">
              En Análisis 
            </div>
        </div>
      </div>


        @endforelse



      </div>


      <div class="justify-content-center row">
        <h5 class="text-success text-center mb-3">
          <br />
          En Análisis
        </h5>

        <div class="row" style="width: 100%">
          <div class="text-center col-2" style="font-size: 10px">
            <b>ID</b>
          </div>
          <div class="text-center col" style="font-size: 10px">
            <b>Nombre </b>
          </div>
          <div class="text-center col-1" style="font-size: 10px">
            <b>Fecha limite</b>
          </div>
         
        
          <div class="text-center col" style="font-size: 10px">
            <b>Acción </b>
          </div>


        </div>

        @forelse ($ordersUnderAnalysis as $analysisOrder)
            
        
            
        
        <div
          class="shadow card border-primary"
          style="padding: 5px; width: 100%; cursor: pointer"
        >
          <div class="align-items-center row" style="font-size: 11px">
            <div class="text-center col-2"> {{ $analysisOrder->code }}</div>
            <div class="text-center col">{{ $analysisOrder->supply_point_name }}</div>

            @php
            $requestTimeAnaylsis = $analysisOrder->deadline_offer_recive;
              $formattedTimeAnalysis = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTimeAnaylsis)->format('F j, Y, g:i a');
            @endphp
            <div class="text-center col-1">{{  $formattedTimeAnalysis }} </div>


              <div class="text-center col" >
                <div class="btn-group">
               
                  <button type="button" class="btn btn-success btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_view{{ $analysisOrder->id }}">Ver</button>
            
                  
                  <button type="button" class="btn btn-danger btn-sm m-1" onclick="deleteTheOrder({{ $analysisOrder->id }})">Eliminar </button>
                </div>



                {{-- anaylysis modal start here --}}

                <div class="modal fade" id="modal_view{{ $analysisOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $analysisOrder->supply_point_name }} </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                  {{-- modal body start --}}
                  @include('components.buyer.orderView', [
                    'openOrder' => $analysisOrder
                  ])
                  {{-- end of the body --}}
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>


                {{-- Analysis modal ends here --}}

           
</div>
            
          </div>
        </div>


        @empty



        <div
        class="shadow card border-primary"
        style="padding: 5px; width: 100%; cursor: pointer"
      >
        <div class="align-items-center row text-center" style="font-size: 11px">
            <div class="col">
              Sin Datos
            </div>
        </div>
      </div>


        @endforelse



      </div>


      <div class="justify-content-center row">
        <h5 class="text-success text-center mb-3">
          <br />
          Adjudicada
        </h5>
        <div class="row" style="width: 100%">
          <div class="text-center col-2" style="font-size: 10px">
            <b>ID</b>
          </div>
          <div class="text-center col" style="font-size: 10px">
            <b>Nombre </b>
          </div>
          <div class="text-center col-1" style="font-size: 10px">
            <b>Fecha limite</b>
          </div>
         
        
          <div class="text-center col" style="font-size: 10px">
            <b>Acción </b>
          </div>


        </div>

        @forelse ($ordersAwarded as $AdjudicadaOrder)
            
        
            
        
        <div
          class="shadow card border-primary"
          style="padding: 5px; width: 100%; cursor: pointer"
        >
          <div class="align-items-center row" style="font-size: 11px">
            <div class="text-center col-2"> {{ $AdjudicadaOrder->code }}</div>
            <div class="text-center col">{{ $AdjudicadaOrder->supply_point_name }}</div>

            @php
            $requestTimeAdjudicada = $AdjudicadaOrder->deadline_offer_recive;
              $formattedTimeAdjudicada = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTimeAdjudicada)->format('F j, Y, g:i a');
            @endphp
            <div class="text-center col-1">{{  $formattedTimeAdjudicada }} </div>



            
            <div class="text-center col" >
              <div class="btn-group">
             
                <button type="button" class="btn btn-success btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_view{{ $AdjudicadaOrder->id }}">Ver</button>
                <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#bid_view{{ $AdjudicadaOrder->id }}" >Ver Ofertas</button>
                <button type="button" class="btn btn-danger btn-sm m-1" onclick="deleteTheOrder({{ $AdjudicadaOrder->id }})">Eliminar </button>
              </div>


                   {{--  bid view modal --}}

            <div class="modal fade" id="bid_view{{ $AdjudicadaOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">

                  @include('components.modal.bidview',[
                      'bids' => $AdjudicadaOrder->bids,
                  ]);
                
              </div>
            </div>



            {{-- end of the bid view modal --}}



              {{-- Adjudicada edit modal start here --}}


              <div class="modal fade" id="modal_edit{{ $AdjudicadaOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">change status {{ $AdjudicadaOrder->supply_point_name }}</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ route('update_order_status') }}" method="POST" >
                      @csrf
                    
                    <input type="text" name="order_id" id="" value="{{ $AdjudicadaOrder->id  }}" required hidden>
                 
                    <div class="modal-body">
                      

                      <div class="form-group mt-3">
                         <label for="status_change_select"> Status</label>
                       
                            <select class="select form-control" name="status" required id="status_change_select">

                              <option value="open"  >Open</option>
                              <option value="awarded" selected>Adjudicada</option>
                              <option value="under_analysis" >Under Analysis</option>
                              <option value="desert">Desert</option>
                            </select>
                      </div>
            


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                  </form>
                  </div>
                </div>
              </div>

              {{-- Adjudicada edit modal end here --}}






              {{-- Adjudicada modal start here --}}

              <div class="modal fade" id="modal_view{{ $AdjudicadaOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $AdjudicadaOrder->supply_point_name }} </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                                      {{-- modal body start --}}
                  @include('components.buyer.orderView', [
                    'openOrder' => $AdjudicadaOrder
                  ])
                  {{-- end of the body --}}
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>


              {{-- Adjudicada modal ends here --}}

         
</div>
            
          </div>
        </div>


        @empty



        <div
        class="shadow card border-primary"
        style="padding: 5px; width: 100%; cursor: pointer"
      >
        <div class="align-items-center row text-center" style="font-size: 11px">
            <div class="col">
              Sin Datos
            </div>
        </div>
      </div>


        @endforelse



      </div>





      <div class="justify-content-center row">
        <h5 class="text-danger text-center mb-3">
          <br />
          Desierta 
        </h5>
        <div class="row" style="width: 100%">
          <div class="text-center col-2" style="font-size: 10px">
            <b>ID</b>
          </div>
          <div class="text-center col" style="font-size: 10px">
            <b>Nombre </b>
          </div>
          <div class="text-center col-1" style="font-size: 10px">
            <b>Fecha limite</b>
          </div>
         
        
          <div class="text-center col" style="font-size: 10px">
            <b>Acción </b>
          </div>


        </div>

        @forelse ($ordersDesert as $desertOrder)
            
        
            
        
        <div
          class="shadow card border-primary"
          style="padding: 5px; width: 100%; cursor: pointer"
        >
          <div class="align-items-center row" style="font-size: 11px">
            <div class="text-center col-2"> {{ $desertOrder->code }}</div>
            <div class="text-center col">{{ $desertOrder->supply_point_name }}</div>

            @php
            $requestTimeDesert = $desertOrder->deadline_offer_recive;
              $formattedTimeDesert = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTimeDesert)->format('F j, Y, g:i a');
            @endphp
            <div class="text-center col-1">{{  $formattedTimeDesert }} </div>


            <div class="text-center col" >
              <div class="btn-group">
             
                <button type="button" class="btn btn-success btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_view{{ $desertOrder->id }}">Ver</button>
                {{-- <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_edit{{ $desertOrder->id }}">change status</button> --}}
                {{-- <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#bid_view{{ $desertOrder->id }}" >Ver Ofertas</button> --}}
                <button type="button" class="btn btn-danger btn-sm m-1" onclick="deleteTheOrder({{ $desertOrder->id }})">Eliminar </button>
              </div>



                   {{--  bid view modal --}}

            <div class="modal fade" id="bid_view{{ $desertOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">

                  @include('components.modal.bidview',[
                      'bids' => $desertOrder->bids,
                  ]);
                
              </div>
            </div>



            {{-- end of the bid view modal --}}



              {{-- desert edit modal start here --}}
              <div class="modal fade" id="modal_edit{{ $desertOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">change status {{ $desertOrder->supply_point_name }}</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="{{ route('update_order_status') }}" method="POST" >
                      @csrf
                    
                    <input type="text" name="order_id" id="" value="{{ $desertOrder->id  }}" required hidden>
                 
                    <div class="modal-body">
                      

                      <div class="form-group mt-3">
                         <label for="status_change_select"> Status</label>
                       
                            <select class="select form-control" name="status" required id="status_change_select">

                              <option value="open"  >Open</option>
                              <option value="awarded" >Adjudicada</option>
                              <option value="under_analysis" >Under Analysis</option>
                              <option value="desert" selected>Desert</option>
                            </select>
                      </div>
            


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>

                  </form>
                  </div>
                </div>
              </div>

              {{-- desert edit modal end here --}}


              {{-- desert modal start here --}}

              <div class="modal fade" id="modal_view{{ $desertOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $desertOrder->supply_point_name }} </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                                      {{-- modal body start --}}
                  @include('components.buyer.orderView', [
                    'openOrder' => $desertOrder
                  ])
                  {{-- end of the body --}}
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>


              {{-- Analysis modal ends here --}}

         
</div>





            
          </div>
        </div>


        @empty



        <div
        class="shadow card border-primary"
        style="padding: 5px; width: 100%; cursor: pointer"
      >
        <div class="align-items-center row text-center" style="font-size: 11px">
            <div class="col">
              Sin Datos
            </div>
        </div>
      </div>


        @endforelse



      </div>
      
      
      
    </div>
    <div class="row"><br /></div>
  </div>

  {{--  sider code was there --}}
  
</div>































<form action="{{ route('delete_buyer_order') }}" method="post" id="order_delete_form_id" hidden>
  @csrf
  <input type="text" name="order_id" id="delete_input_order_id" >

</form>
<script>

  function deleteTheOrder(id) {
              if (confirm("Are you Sure Want to Delete?")) {
                  document.getElementById('delete_input_order_id').value = id;
                  document.getElementById('order_delete_form_id').submit();
                } else {
                  return false;
                }
            }
  
        </script>


@endsection