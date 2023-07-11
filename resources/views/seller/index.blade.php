@extends('layouts.app')
@section('content')


{{-- session error messages --}}
@include('components.additional.errorMessages')
{{-- end of the error messages --}}






<div class="justify-content-md-center row">
    <div class="col-xl-12 col-md-12 pl-4">
      <br />
      <div class="container-fluid">
       
        <div class="row">
          <div class="col-6">
            <h5 class="text text-secondary">Open Orders</h5>
          </div>
          
        </div>
      </div>

      <div class="container-fluid">
        <div class="justify-content-center row">
          <h5 class="text-success text-center mb-3">
            <br />
            Open to Bid
          </h5>
          <div class="row" style="width: 100%">
            <div class="text-center col-2" style="font-size: 10px">
              <b>ID</b>
            </div>
            <div class="text-center col" style="font-size: 10px">
              <b>Nombre</b>
            </div>


            <div class="text-center col-1" style="font-size: 10px">
              <b>Fecha limite</b>
            </div>
          


             <div class="text-center col" style="font-size: 10px">
              <b>Acción</b>
            </div>

          
          </div>

          @forelse ($ordersOpen as $openOrder)
              
          
              
          
          <div
            class="shadow card border-primary button"
            style="padding: 5px; width: 100%; cursor: pointer"
          >
            <div class="align-items-center row" style="font-size: 11px" >
              <div class="text-center col-2"> {{ $openOrder->code }}</div>
              <div class="text-center col">{{ $openOrder->supply_point_name }}</div>

              @php
              $requestTimeDeadline = $openOrder->deadline_offer_recive;
                $formattedTimeDeadline = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTimeDeadline)->format('F j, Y, g:i a');
              @endphp
              <div class="text-center col-1">{{  $formattedTimeDeadline }} </div>

  

              <div class="text-center col" >
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_view{{ $openOrder->id }}">Ver</button>


                  @php

                  $currentBid = null;

                      foreach ($sellerHasBids as $key => $sellerBid) {
                          if ($sellerBid->order_id == $openOrder->id) {
                           $currentBid = $sellerBid;
                          }
                      }
                  @endphp




                  {{-- check if the user already applied or not --}}


                        @if($currentBid != null)

                        <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_edit{{ $openOrder->id }}">Ver o Modificar Oferta</button>

                        @else

                        <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_edit{{ $openOrder->id }}">Ofertar</button>

                      
                        @endif




                </div>
              </div>


              {{-- Apply modal start here --}}

                        <div class="modal fade" id="modal_edit{{ $openOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">


                                <h5 class="modal-title" id="exampleModalLabel">Ofertar Para: {{ $openOrder->supply_point_name }}  </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              {{--  modal body start here --}}

                              @include('components.seller.applyModal', [
                                'openOrder' => $openOrder,
                                'currentBid' => $currentBid
                              ])
                              {{--  modal body ends here --}}
                              
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>


              {{-- edit modal end here --}}




             {{-- open order modal --}}


              <div class="modal fade" id="modal_view{{ $openOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $openOrder->supply_point_name }} </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    @include('components.seller.viewModal', [
                      'openOrder' => $openOrder,
                    ])
                    
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
                No Data Available
              </div>
          </div>
        </div>


          @endforelse



        </div>


        
        
      </div>



      {{-- // analysis starts form here --}}


      <div class="justify-content-center row">
        <h5 class="text-success text-center mb-3">
          <br />
          In Analysis
        </h5>

        <div class="row" style="width: 100%">
          <div class="text-center col-2" style="font-size: 10px">
            <b>ID</b>
          </div>
          <div class="text-center col" style="font-size: 10px">
            <b>Nombre</b>
          </div>
          <div class="text-center col-1" style="font-size: 10px">
            <b>Fecha limite</b>
          </div>
         
        
          <div class="text-center col" style="font-size: 10px">
            <b>Acción</b>
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
                 
                </div>







                {{-- anaylysis modal start here --}}

                <div class="modal fade" id="modal_view{{ $analysisOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $analysisOrder->supply_point_name }} </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      @include('components.seller.viewModal', [
                        'openOrder' => $analysisOrder,
                      ])
                      
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
              No Data Available
            </div>
        </div>
      </div>


        @endforelse



      </div>
      {{-- analysis ends from here --}}






      {{-- Awarded section start here --}}

      <div class="justify-content-center row">
        <h5 class="text-success text-center mb-3">
          <br />
          Awarded
        </h5>
        <div class="row" style="width: 100%">
          <div class="text-center col-2" style="font-size: 10px">
            <b>ID</b>
          </div>
          <div class="text-center col" style="font-size: 10px">
            <b>Nombre</b>
          </div>
          <div class="text-center col-1" style="font-size: 10px">
            <b>Fecha limite</b>
          </div>
         
        
          <div class="text-center col" style="font-size: 10px">
            <b>Acción</b>
          </div>


        </div>

        @forelse ($ordersAwarded as $awardedOrder)
            
        
            
        
        <div
          class="shadow card border-primary"
          style="padding: 5px; width: 100%; cursor: pointer"
        >
          <div class="align-items-center row" style="font-size: 11px">
            <div class="text-center col-2"> {{ $awardedOrder->code }}</div>
            <div class="text-center col">{{ $awardedOrder->supply_point_name }}</div>

            @php
            $requestTimeAwarded = $awardedOrder->deadline_offer_recive;
              $formattedTimeAwarded = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTimeAwarded)->format('F j, Y, g:i a');
            @endphp
            <div class="text-center col-1">{{  $formattedTimeAwarded }} </div>



            
            <div class="text-center col" >
              <div class="btn-group">
             
                <button type="button" class="btn btn-success btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_view{{ $awardedOrder->id }}">Ver</button>
             
              </div>


              {{-- Awarded modal start here --}}

              <div class="modal fade" id="modal_view{{ $awardedOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $awardedOrder->supply_point_name }} </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    
            @include('components.seller.viewModal', [
              'openOrder' => $awardedOrder,
            ])

                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
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
              No Data Available
            </div>
        </div>
      </div>


        @endforelse



      </div>


      {{-- Awarded section end here --}}




      <div class="justify-content-center row">
        <h5 class="text-danger text-center mb-3">
          <br />
          Deserts
        </h5>
        <div class="row" style="width: 100%">
          <div class="text-center col-2" style="font-size: 10px">
            <b>ID</b>
          </div>
          <div class="text-center col" style="font-size: 10px">
            <b>Nombre</b>
          </div>
          <div class="text-center col-1" style="font-size: 10px">
            <b>Fecha limite</b>
          </div>
         
        
          <div class="text-center col" style="font-size: 10px">
            <b>Acción</b>
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
               
              </div>




              {{-- desert modal start here --}}

              <div class="modal fade" id="modal_view{{ $desertOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $desertOrder->supply_point_name }} </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    
            @include('components.seller.viewModal', [
              'openOrder' => $desertOrder,
            ])
                    
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
              No Data Available
            </div>
        </div>
      </div>


        @endforelse



      </div>







    </div>

    
  </div>


@endsection