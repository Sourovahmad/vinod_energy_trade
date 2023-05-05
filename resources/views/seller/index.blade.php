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
              <b>Name</b>
            </div>


            <div class="text-center col-1" style="font-size: 10px">
              <b>Deadline</b>
            </div>
          


             <div class="text-center col" style="font-size: 10px">
              <b>Action</b>
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
                  <button type="button" class="btn btn-success btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_view{{ $openOrder->id }}">view</button>


                  @php

                  $currentBid = null;

                      foreach ($sellerHasBids as $key => $sellerBid) {
                          if ($sellerBid->id == $openOrder->id) {
                           $currentBid = $sellerBid;
                          }
                      }
                  @endphp




                  {{-- check if the user already applied or not --}}


                        @if($currentBid != null)

                        <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_edit{{ $openOrder->id }}">View or Modify Offer</button>

                        @else

                        <button type="button" class="btn btn-primary btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_edit{{ $openOrder->id }}">Apply</button>

                      
                        @endif




                </div>
              </div>


              {{-- Apply modal start here --}}

                        <div class="modal fade" id="modal_edit{{ $openOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">


                                <h5 class="modal-title" id="exampleModalLabel">Apply For: {{ $openOrder->supply_point_name }}  </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="shadow text-center card border-secondary">
                                  <div class="row">
                                    <div class="col-md-4">
          
                                    @if(!is_null($openOrder->user->profile_photo_path))
                                      <img
                                      src="{{ asset('images/') . '/' . $openOrder->user->profile_photo_path }}"
                                      width="200"
                                      height="106"
                                      alt="logo"
                                    />
          
                                      @endif
                                   
                                    </div>
                                    <div class="col-md-4">
                                      <br />
                                      <div class="justify-content-center row">
                                        <b>{{ $openOrder->user->first_name }}  {{ $openOrder->user->last_name }}</b>
                                      </div>
                                      <div class="col">
                                        <div class="justify-content-center row">
                                          {{ $openOrder->supply_point_name}} - {{ $openOrder->location_of_supply_point }}
                                          <svg
                                            class="MuiSvgIcon-root"
                                            focusable="false"
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                          >
                                            <path
                                              d="M12 4c4.41 0 8 3.59 8 8s-3.59 8-8 8-8-3.59-8-8 3.59-8 8-8m0-2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 13l-4-4h8z"
                                            ></path>
                                          </svg>
                                        </div>
                                        <div class="justify-content-center collapse row">
                                          Ruta Nacional 7 km. 703 y Ruta Provincial 2 <br />
                                          Villa Mercedes San Luis <br />
                                          <b>Ecogas Cuyo</b>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <br />
                                      ID Pedido:{{ $openOrder->code }}<br />
                                      <a class="text text-center text"><b>{{ $openOrder->purchase_request_for }}</b></a
                                      ><br />
                                      <b class="text-success">Abierto</b>
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <div class="shadow p-3 mb-5 bg-white rounded card border-success">
                                      <div class="justify-content-center row">
                                        <div class="col-4">
                                          
                                          <div class="justify-content-center row">
                                            <h6 class="text-success">
                                              <b>Licitación </b>
                                              <svg
                                                class="MuiSvgIcon-root text-success"
                                                focusable="false"
                                                viewBox="0 0 24 24"
                                                aria-hidden="true"
                                                style="font-size: 24px"
                                              >
                                                <path
                                                  d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"
                                                ></path>
                                              </svg>
                                            </h6>
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="justify-content-center row">
                                            @php
                                            $requestTimePublicationOpen = $openOrder->publication_date;
                                            $closeTimeOfferReciveOpen = $openOrder->deadline_offer_recive;
                                              $formattedTimePublicationOpen = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTimePublicationOpen)->format('F j, Y, g:i a');
                                              $endTimeOfofferRecive = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $closeTimeOfferReciveOpen)->format('F j, Y, g:i a');
                                            @endphp
                                            <h6>Abre el: {{ $formattedTimePublicationOpen }}  </h6>
                                          </div>
                                          <div class="justify-content-center row">
                                            <h6>Cierra el: {{ $endTimeOfofferRecive }}</h6>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="justify-content-center row">
                                        <a class="text-secondary"
                                          >Se aceptan Ofertas con distinto plazo de pago</a
                                        >
                                        <a class="text-success">
                                          <svg
                                            class="MuiSvgIcon-root"
                                            focusable="false"
                                            viewBox="0 0 24 24"
                                            aria-hidden="true"
                                          >
                                            <path
                                              d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"
                                            ></path>
                                          </svg>
                                        </a>
                                      </div>
                                      <hr />
                                      <div class="justify-content-center row">
                                        <div class="col-sm-6">
                                          <div role="alert" class="fade alert alert-success show">
                                            <div class="alert-heading h4">
                      
                                                @php
                                                  $startTimeOfThePublicationAbbs = \Carbon\Carbon::parse(now());
                                                  $endTimeOfPublicationABBS = \Carbon\Carbon::parse($openOrder->deadline_offer_recive);
                      
                                                  $differentOfthePublciationSBBBS = $endTimeOfPublicationABBS->diff($startTimeOfThePublicationAbbs);
                                                @endphp
                      
                      
                                              <span>{{ $differentOfthePublciationSBBBS->days }} days  {{ $differentOfthePublciationSBBBS->h }}  hours</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    
                                    <br />
                                    
                                    <br />
                                    <div class="shadow text-secondary card">
                                      <div
                                        data-open="false"
                                        onclick="toggleBody(this)"
                                        class="card-title h5"
                                      >
                                        <br />
                                        <div class="justify-content-center text-secondary row">
                                          <div class="col">
                                            <div class="justify-content-center row">
                                              <h5>Curva de Demanda</h5>
                                              &nbsp;
                                              <svg
                                                class="MuiSvgIcon-root"
                                                focusable="false"
                                                viewBox="0 0 24 24"
                                                aria-hidden="true"
                                              >
                                                <path
                                                  d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                                ></path>
                                              </svg>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="collapse card-body">
                                        <div class="justify-content-center row">
                                          <div class="col">
                                            <table class="text-secondary text-center table table-sm">
                                              <thead>
                                                <tr>
                                                  <th>Mes</th>
                                                  <th>Consumo [dam3/mes]</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Mayo 2023</td>
                                                  <td>{{ $openOrder->expected_may }}</td>
                                                </tr>
                                                <tr>
                                                  <td>Junio 2023</td>
                                                  <td>{{ $openOrder->expected_june }}</td>
                                                </tr>
                                                <tr>
                                                  <td>Julio 2023</td>
                                                  <td>{{ $openOrder->expected_july }}</td>
                                                </tr>
                                                <tr>
                                                  <td>Agosto 2023</td>
                                                  <td>{{ $openOrder->expected_august }}</td>
                      
                                                </tr>
                                                <tr>
                                                  <td>Septiembre 2023</td>
                                                  <td>{{ $openOrder->expected_september }}</td>
                                                </tr>
                                                <tr>
                                                  <td>Octubre 2023</td>
                                                  <td>{{ $openOrder->expected_october }}</td>
                                                </tr>
                                                <tr>
                                                  <td>Noviembre 2023</td>
                                                  <td>{{ $openOrder->expected_november }}</td>
                      
                                                </tr>
                                                <tr>
                                                  <td>Diciembre 2023</td>
                                                  <td>{{ $openOrder->expected_december }}</td>
                      
                                                </tr>
                                                <tr>
                                                  <td>Enero 2024</td>
                                                  <td>{{ $openOrder->expected_january }}</td>
                                                </tr>
                                                <tr>
                                                  <td>Febrero 2024</td>
                                                  <td>{{ $openOrder->expected_february }}</td>
                                                </tr>
                                                <tr>
                                                  <td>Marzo 2024</td>
                                                  <td>{{ $openOrder->expected_march }}</td>
                                                </tr>
                                                <tr>
                                                  <td>Abril 2024</td>
                                                  <td>{{ $openOrder->expected_april }}</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                        
                                      </div>
                                    </div>
                                    <br />
                                    <div class="shadow text-secondary card">
                                      <div
                                        data-open="false"
                                        onclick="toggleBody(this)"
                                        class="card-title h5"
                                      >
                                        <br />
                                        <div class="justify-content-center text-secondary row">
                                          <div class="col">
                                            <div class="justify-content-center row">
                                              <h5>Condiciones Comerciales</h5>
                                              &nbsp;
                                              <svg
                                                class="MuiSvgIcon-root"
                                                focusable="false"
                                                viewBox="0 0 24 24"
                                                aria-hidden="true"
                                              >
                                                <path
                                                  d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                                ></path>
                                              </svg>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="collapse card-body">
                                        <div class="justify-content-md-center row">
                                          <div class="col-lg-10 col-md-12 col-sm-10">
                                            <table
                                              class="text-center text-secondary table table-sm table-hover"
                                            >
                                              <tbody class="text-secondary">
                                                <tr>
                                                  <td><b>Producto</b></td>
                                                  <td>{{ $openOrder->supply_point_name }}</td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <b>Plazo del Contrato</b>
                                                  </td>
                                                
                                                  <td>{{ $openOrder->contact_term_days }} days</td>
                                                </tr>
                      
                                                @if(!is_null($openOrder->start_of_supply))
                                                  
                                                
                                                <tr>
                                                  <td>
                                                    @php
                                                    $formatedSupplyStartTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $openOrder->start_of_supply)->format('F j, Y, g:i a');
                                                  @endphp
                                                    <b>Inicio de Suministro</b>
                                                  </td>
                                                  <td>{{ $formatedSupplyStartTime }}t</td>
                                                </tr>
                      
                      
                                                @endif
                                              
                                                
                                                <tr>
                                                  <td>
                                                    <b>Tipo de Suministro</b>
                                                  </td>
                                                  <td> {{ $openOrder->type_of_supply }} </td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <b>
                                                      Exclusividad
                                                      <svg
                                                        class="MuiSvgIcon-root"
                                                        focusable="false"
                                                        viewBox="0 0 24 24"
                                                        aria-hidden="true"
                                                      >
                                                        <path
                                                          d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                                        ></path>
                                                      </svg>
                                                    </b>
                                                  </td>
                                                  <td>{{ $openOrder->exclusivity }}</td>
                                                </tr>

                                                 
                                                <tr>
                                                  <td>
                                                    <b>Total Quantity</b>
                                                  </td>
                                                  <td>{{ $openOrder->total_quantity }} </td>
                                                </tr>

                                                <tr>
                                                  <td>
                                                    <b>Take or Pay</b>
                                                  </td>
                                                  <td>{{ $openOrder->take_or_pay_percentage }} %</td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <b>Deliver or Pay</b>
                                                  </td>
                                                  <td>{{ $openOrder->delivery_or_pay_price }} %</td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <b>Plazo de pago</b>
                                                  </td>
                                                  <td>{{ $openOrder->payment_term }} días</td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <b>Tasa de Cambio</b>
                                                  </td>
                                                  <td>{{ $openOrder->exchange_rate }}</td>
                                                </tr>
                                                <tr>
                                                  <td>
                                                    <b>Comisión</b>
                                                  </td>
                                                  <td>{{ $openOrder->auction_commision }}</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>
                                        <div class="justify-content-center row">


                                        </div>
                                      </div>
                                    </div>
                                    <br />


                                    <div class="row">
                                      <div class="col"></div>
                                      <div class="col-sm-12">
                                        <div class="card">
                                          <div class="card-header">
                            
                            
                                            <div class="row">
                                              <div class="col h4">Enter Your offer</div>
                                              <div class="col-sm-7">
                                                <b>Suggested payment term:</b>
                                              {{ $openOrder->contact_term_months }} Months
                                              </div>
                                            </div>
                                          </div>
                                          <form method="post" action="{{ route('submit_bid') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group mb-2">
                                              <br />
                                              <div class="row">

                                                <input type="text" name="order_id" value="{{ $openOrder->id }}" required hidden>


                                                @if($currentBid != null)

                                                <input type="text" name="status" value="update" required hidden>

                                                @else

                                                    <input type="text" name="status" value="create" required hidden>


                                                @endif

                                                <div class="col">
                                                  <label class="form-label">Price January </label>
                                                </div>
                                                <div class="col">
                                                  <input
                                                    type="number"
                                                    placeholder="USD/dam3"
                                                    class="form-control"
                                                    name="price_january"
                                                    value="{{ $currentBid ? $currentBid->price_january : '' }}"
                                                  />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>


                                            </div>


                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label"> Price February</label>
                                                </div>
                                                <div class="col">
                                                  <input
                                                  type="number"
                                                    placeholder="USD/dam3"
                                                    class="form-control"
                                                    name="price_february"
                                                    value="{{ $currentBid ? $currentBid->price_february : '' }}"
                                                  />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>

                                            </div>



                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label">Price March</label>
                                                </div>
                                                <div class="col">
                                                  <input type="number" placeholder="USD/dam3" class="form-control" name="price_march"             
                                                      value="{{ $currentBid ? $currentBid->price_march : '' }}" />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>


                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label">Price April</label>
                                                </div>
                                                <div class="col">
                                                  <input type="number" placeholder="USD/dam3" class="form-control" name="price_april" 
                                                  value="{{ $currentBid ? $currentBid->price_april : '' }}"
                                                  />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>

                                            
                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label">Price May</label>
                                                </div>
                                                <div class="col">
                                                  <input type="number" placeholder="USD/dam3" class="form-control" name="price_may"
                                                  value="{{ $currentBid ? $currentBid->price_may : '' }}"
                                                  />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>
                                            

                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label type="number" class="form-label">Price June</label>
                                                </div>
                                                <div class="col">
                                                  <input placeholder="USD/dam3" class="form-control" name="price_june"
                                                  value="{{ $currentBid ? $currentBid->price_june : '' }}"
                                                  
                                                  />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>
                                            
                                            

                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label">Price July</label>
                                                </div>
                                                <div class="col">
                                                  <input type="number" placeholder="USD/dam3" class="form-control" name="price_july"
                                                  value="{{ $currentBid ? $currentBid->price_july : '' }}"
                                                  
                                                  />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>



                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label">Price August</label>
                                                </div>
                                                <div class="col">
                                                  <input type="number" placeholder="USD/dam3" class="form-control" name="price_august"
                                                  value="{{ $currentBid ? $currentBid->price_august : '' }}"
                                                  
                                                  />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>

                                            

                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label">Price September</label>
                                                </div>
                                                <div class="col">
                                                  <input  type="number" placeholder="USD/dam3" class="form-control" name="price_september"
                                                  value="{{ $currentBid ? $currentBid->price_september : '' }}"
                                                  
                                                  
                                                  />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>
                                            

                                            
                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label">Price October</label>
                                                </div>
                                                <div class="col">
                                                  <input type="number" placeholder="USD/dam3" class="form-control" name="price_october" 
                                                  value="{{ $currentBid ? $currentBid->price_october : '' }}"
                                                  
                                                  
                                                  />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>



                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label">Price November</label>
                                                </div>
                                                <div class="col">
                                                  <input type="number" placeholder="USD/dam3" class="form-control" name="price_november"
                                                  value="{{ $currentBid ? $currentBid->price_november : '' }}"
                                                  
                                                  />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>



                                            
                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label">Price December</label>
                                                </div>
                                                <div class="col">
                                                  <input type="number" placeholder="USD/dam3" class="form-control" name="price_december"
                                                  value="{{ $currentBid ? $currentBid->price_december : '' }}"
                                                  />
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>






                                            @if($openOrder->take_or_pay_optional_to_seller == 'YES')

 
                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label">Optinal Take or pay to the seller (0%-100%)</label>
                                                </div>
                                                <div class="col">
                                                  <input type="number" placeholder="0%-100%" class="form-control" name="optional_take_or_pay_to_seller" min="0" max="100"
                                                  
                                                  value="{{ $currentBid ? $currentBid->optional_take_or_pay_to_seller : '' }}"
                                                  
                                                  
                                                  required/>
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>
                                              
                                            @endif


                                            



                                            @if($openOrder->optional_delivery_to_seller == 'YES')

 
                                            <div class="form-group mb-3">
                                              <div class="row">
                                                <div class="col">
                                                  <label class="form-label">Optinal delivery or pay to the seller (0%-100%)</label>
                                                </div>
                                                <div class="col">
                                                  <input type="number" placeholder="0%-100%" class="form-control" name="optional_delivery_or_pay_to_seller" min="0" max="100"
                                                  value="{{ $currentBid ? $currentBid->optional_delivery_or_pay_to_seller : '' }}"
        
                                                  
                                                  required/>
                                                </div>
                                                <div class="col-xl-1"></div>
                                              </div>
                                            </div>
                                              
                                            @endif

                                            
                                            


                                            <hr>

                                            <br>
                                            
                                            <button
                                            type="submit"
                                            class="btn btn-outline-primary"
                                          >

                                         {{ $currentBid ? "update" : 'Send Offer' }}
                                                  
                                            
                                          </button>
                                            
                                          </form>
                                       
                                        </div>
                                      </div>
                                    </div>


                                    <br />
                                  </div>
                                </div>
                              </div>
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
                    <div class="modal-body">
                      <div class="shadow text-center card border-secondary">
                        <div class="row">
                          <div class="col-md-4">

                          @if(!is_null($openOrder->user->profile_photo_path))
                            <img
                            src="{{ asset('images/') . '/' . $openOrder->user->profile_photo_path }}"
                            width="200"
                            height="106"
                            alt="logo"
                          />

                            @endif
                         


                          </div>
                          <div class="col-md-4">
                            <br />
                            <div class="justify-content-center row">
                              <b>{{ $openOrder->user->first_name }}  {{ $openOrder->user->last_name }}</b>
                            </div>
                            <div class="col">
                              <div class="justify-content-center row">
                                Planta R22 - Ácido Nítrico
                                <svg
                                  class="MuiSvgIcon-root"
                                  focusable="false"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    d="M12 4c4.41 0 8 3.59 8 8s-3.59 8-8 8-8-3.59-8-8 3.59-8 8-8m0-2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 13l-4-4h8z"
                                  ></path>
                                </svg>
                              </div>
                              <div class="justify-content-center collapse row">
                                Ruta Nacional 7 km. 703 y Ruta Provincial 2 <br />
                                Villa Mercedes San Luis <br />
                                <b>Ecogas Cuyo</b>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <br />
                            ID Pedido:{{ $openOrder->code }}<br />
                            <a class="text text-center text"><b>{{ $openOrder->purchase_request_for }}</b></a
                            ><br />
                            <b class="text-success">Abierto</b>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="shadow p-3 mb-5 bg-white rounded card border-success">
                            <div class="justify-content-center row">
                              <div class="col-4">
                                
                                <div class="justify-content-center row">
                                  <h6 class="text-success">
                                    <b>Licitación </b>
                                    <svg
                                      class="MuiSvgIcon-root text-success"
                                      focusable="false"
                                      viewBox="0 0 24 24"
                                      aria-hidden="true"
                                      style="font-size: 24px"
                                    >
                                      <path
                                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"
                                      ></path>
                                    </svg>
                                  </h6>
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="justify-content-center row">
                                  @php
                                  $requestTimePublicationOpen = $openOrder->publication_date;
                                  $closeTimeOfferReciveOpen = $openOrder->deadline_offer_recive;
                                    $formattedTimePublicationOpen = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTimePublicationOpen)->format('F j, Y, g:i a');
                                    $endTimeOfofferRecive = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $closeTimeOfferReciveOpen)->format('F j, Y, g:i a');
                                  @endphp
                                  <h6>Abre el: {{ $formattedTimePublicationOpen }}  </h6>
                                </div>
                                <div class="justify-content-center row">
                                  <h6>Cierra el: {{ $endTimeOfofferRecive }}</h6>
                                </div>
                              </div>
                            </div>
                            <div class="justify-content-center row">
                              <a class="text-secondary"
                                >Se aceptan Ofertas con distinto plazo de pago</a
                              >
                              <a class="text-success">
                                <svg
                                  class="MuiSvgIcon-root"
                                  focusable="false"
                                  viewBox="0 0 24 24"
                                  aria-hidden="true"
                                >
                                  <path
                                    d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"
                                  ></path>
                                </svg>
                              </a>
                            </div>
                            <hr />
                            <div class="justify-content-center row">
                              <div class="col-sm-6">
                                <div role="alert" class="fade alert alert-success show">
                                  <div class="alert-heading h4">
            
                                      @php
                                        $startTimeOfThePublicationAbbs = \Carbon\Carbon::parse(now());
                                        $endTimeOfPublicationABBS = \Carbon\Carbon::parse($openOrder->deadline_offer_recive);
            
                                        $differentOfthePublciationSBBBS = $endTimeOfPublicationABBS->diff($startTimeOfThePublicationAbbs);
                                      @endphp
            
            
                                    <span>{{ $differentOfthePublciationSBBBS->days }} days  {{ $differentOfthePublciationSBBBS->h }}  hours</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          
                          <br />
                          
                          <br />
                          <div class="shadow text-secondary card">
                            <div
                              data-open="false"
                              onclick="toggleBody(this)"
                              class="card-title h5"
                            >
                              <br />
                              <div class="justify-content-center text-secondary row">
                                <div class="col">
                                  <div class="justify-content-center row">
                                    <h5>Curva de Demanda</h5>
                                    &nbsp;
                                    <svg
                                      class="MuiSvgIcon-root"
                                      focusable="false"
                                      viewBox="0 0 24 24"
                                      aria-hidden="true"
                                    >
                                      <path
                                        d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                      ></path>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collapse card-body">
                              <div class="justify-content-center row">
                                <div class="col">
                                  <table class="text-secondary text-center table table-sm">
                                    <thead>
                                      <tr>
                                        <th>Mes</th>
                                        <th>Consumo [dam3/mes]</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Mayo 2023</td>
                                        <td>{{ $openOrder->expected_may }}</td>
                                      </tr>
                                      <tr>
                                        <td>Junio 2023</td>
                                        <td>{{ $openOrder->expected_june }}</td>
                                      </tr>
                                      <tr>
                                        <td>Julio 2023</td>
                                        <td>{{ $openOrder->expected_july }}</td>
                                      </tr>
                                      <tr>
                                        <td>Agosto 2023</td>
                                        <td>{{ $openOrder->expected_august }}</td>
            
                                      </tr>
                                      <tr>
                                        <td>Septiembre 2023</td>
                                        <td>{{ $openOrder->expected_september }}</td>
                                      </tr>
                                      <tr>
                                        <td>Octubre 2023</td>
                                        <td>{{ $openOrder->expected_october }}</td>
                                      </tr>
                                      <tr>
                                        <td>Noviembre 2023</td>
                                        <td>{{ $openOrder->expected_november }}</td>
            
                                      </tr>
                                      <tr>
                                        <td>Diciembre 2023</td>
                                        <td>{{ $openOrder->expected_december }}</td>
            
                                      </tr>
                                      <tr>
                                        <td>Enero 2024</td>
                                        <td>{{ $openOrder->expected_january }}</td>
                                      </tr>
                                      <tr>
                                        <td>Febrero 2024</td>
                                        <td>{{ $openOrder->expected_february }}</td>
                                      </tr>
                                      <tr>
                                        <td>Marzo 2024</td>
                                        <td>{{ $openOrder->expected_march }}</td>
                                      </tr>
                                      <tr>
                                        <td>Abril 2024</td>
                                        <td>{{ $openOrder->expected_april }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                          <br />
                          <div class="shadow text-secondary card">
                            <div
                              data-open="false"
                              onclick="toggleBody(this)"
                              class="card-title h5"
                            >
                              <br />
                              <div class="justify-content-center text-secondary row">
                                <div class="col">
                                  <div class="justify-content-center row">
                                    <h5>Condiciones Comerciales</h5>
                                    &nbsp;
                                    <svg
                                      class="MuiSvgIcon-root"
                                      focusable="false"
                                      viewBox="0 0 24 24"
                                      aria-hidden="true"
                                    >
                                      <path
                                        d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                      ></path>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collapse card-body">
                              <div class="justify-content-md-center row">
                                <div class="col-lg-10 col-md-12 col-sm-10">
                                  <table
                                    class="text-center text-secondary table table-sm table-hover"
                                  >
                                    <tbody class="text-secondary">
                                      <tr>
                                        <td><b>Producto</b></td>
                                        <td>{{ $openOrder->supply_point_name }}</td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <b>Plazo del Contrato</b>
                                        </td>
                                      
                                        <td>{{ $openOrder->contact_term_days }} days</td>
                                      </tr>
            
                                      @if(!is_null($openOrder->start_of_supply))
                                        
                                      
                                      <tr>
                                        <td>
                                          @php
                                          $formatedSupplyStartTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $openOrder->start_of_supply)->format('F j, Y, g:i a');
                                        @endphp
                                          <b>Inicio de Suministro</b>
                                        </td>
                                        <td>{{ $formatedSupplyStartTime }}t</td>
                                      </tr>
            
            
                                      @endif
                                    
                                      
                                      <tr>
                                        <td>
                                          <b>Tipo de Suministro</b>
                                        </td>
                                        <td> {{ $openOrder->type_of_supply }} </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <b>
                                            Exclusividad
                                            <svg
                                              class="MuiSvgIcon-root"
                                              focusable="false"
                                              viewBox="0 0 24 24"
                                              aria-hidden="true"
                                            >
                                              <path
                                                d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                              ></path>
                                            </svg>
                                          </b>
                                        </td>
                                        <td>{{ $openOrder->exclusivity }}</td>
                                      </tr>


                                      <tr>
                                        <td>
                                          <b>Total Quantity</b>
                                        </td>
                                        <td>{{ $openOrder->total_quantity }} </td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <b>Take or Pay</b>
                                        </td>
                                        <td>{{ $openOrder->take_or_pay_percentage }} %</td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <b>Deliver or Pay</b>
                                        </td>
                                        <td>{{ $openOrder->delivery_or_pay_price }} %</td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <b>Plazo de pago</b>
                                        </td>
                                        <td>{{ $openOrder->payment_term }} días</td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <b>Tasa de Cambio</b>
                                        </td>
                                        <td>{{ $openOrder->exchange_rate }}</td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <b>Comisión </b>
                                        </td>
                                        <td>{{ $openOrder->auction_commision }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="justify-content-center row">
                              
                              </div>
                            </div>
                          </div>
                          <br />
                          <div class="shadow text-secondary card">
                            
                            
                          </div>
                          <br />
                        </div>
                      </div>
                    </div>
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
            <b>Name</b>
          </div>
          <div class="text-center col-1" style="font-size: 10px">
            <b>Deadline</b>
          </div>
         
        
          <div class="text-center col" style="font-size: 10px">
            <b>Action</b>
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
               
                  <button type="button" class="btn btn-success btn-sm m-1" data-bs-toggle="modal" data-bs-target="#modal_view{{ $analysisOrder->id }}">view</button>
                 
                </div>







                {{-- anaylysis modal start here --}}

                <div class="modal fade" id="modal_view{{ $analysisOrder->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $analysisOrder->supply_point_name }} </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="shadow text-center card border-secondary">
                          <div class="row">
                            <div class="col-md-4">

                              @if(!is_null($analysisOrder->user->profile_photo_path))
                              <img
                              src="{{ asset('images/') . '/' . $analysisOrder->user->profile_photo_path }}"
                              width="200"
                              height="106"
                              alt="logo"
                            />
  
                   @endif


                            </div>
                            <div class="col-md-4">
                              <br />
                              <div class="justify-content-center row">
                                <b>{{ $analysisOrder->user->social_name }} </b>
                              </div>
                              <div class="col">
                                <div class="justify-content-center row">
                                
         {{ $analysisOrder->supply_point_name}} - {{ $analysisOrder->location_of_supply_point }}
                                  <svg
                                    class="MuiSvgIcon-root"
                                    focusable="false"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                  >
                                    <path
                                      d="M12 4c4.41 0 8 3.59 8 8s-3.59 8-8 8-8-3.59-8-8 3.59-8 8-8m0-2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 13l-4-4h8z"
                                    ></path>
                                  </svg>
                                </div>
                                <div class="justify-content-center collapse row">
                                  Ruta Nacional 7 km. 703 y Ruta Provincial 2 <br />
                                  Villa Mercedes San Luis <br />
                                  <b>Ecogas Cuyo</b>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <br />
                              ID Pedido:{{ $analysisOrder->code }}<br />
                              <a class="text text-center text"><b>{{ $analysisOrder->purchase_request_for }}</b></a
                              ><br />
                              <b class="text-success">Abierto</b>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="shadow p-3 mb-5 bg-white rounded card border-success">
                              <div class="justify-content-center row">
                                <div class="col-4">
                                  
                                  <div class="justify-content-center row">
                                    <h6 class="text-success">
                                      <b>Licitación </b>
                                      <svg
                                        class="MuiSvgIcon-root text-success"
                                        focusable="false"
                                        viewBox="0 0 24 24"
                                        aria-hidden="true"
                                        style="font-size: 24px"
                                      >
                                        <path
                                          d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"
                                        ></path>
                                      </svg>
                                    </h6>
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="justify-content-center row">
                                    @php
                                    $requestTimePublicationAnalysis = $analysisOrder->publication_date;
                                    $closeTimePublicationAnalysis = $analysisOrder->deadline_offer_recive;
                                      $formattedTimeAnalysis = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTimePublicationAnalysis)->format('F j, Y, g:i a');
                                      $endTimeFormattedAnayliss = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $closeTimePublicationAnalysis)->format('F j, Y, g:i a');
                                    @endphp
                                    <h6>Abre el: {{ $formattedTimeAnalysis }}  </h6>
                                  </div>
                                  <div class="justify-content-center row">
                                    <h6>Cierra el: {{ $endTimeFormattedAnayliss }}</h6>
                                  </div>
                                </div>
                              </div>
                              <div class="justify-content-center row">
                                <a class="text-secondary"
                                  >Se aceptan Ofertas con distinto plazo de pago</a
                                >
                                <a class="text-success">
                                  <svg
                                    class="MuiSvgIcon-root"
                                    focusable="false"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                  >
                                    <path
                                      d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"
                                    ></path>
                                  </svg>
                                </a>
                              </div>
                              <hr />
                              <div class="justify-content-center row">
                                <div class="col-sm-6">
                                  <div role="alert" class="fade alert alert-success show">
                                    <div class="alert-heading h4">
              
                                        @php
                                          $startTime_publication_analysis = \Carbon\Carbon::parse(now());
                                          $endTime_publication_analysis = \Carbon\Carbon::parse($analysisOrder->deadline_offer_recive);
              
                                          $different_publication_analysis = $endTime_publication_analysis->diff($startTime_publication_analysis);
                                        @endphp
              
              
                                      <span>{{ $different_publication_analysis->days }} days  {{ $different_publication_analysis->h }}  hours</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            
                            <br />
                            
                            <br />
                            <div class="shadow text-secondary card">
                              <div
                                data-open="false"
                                onclick="toggleBody(this)"
                                class="card-title h5"
                              >
                                <br />
                                <div class="justify-content-center text-secondary row">
                                  <div class="col">
                                    <div class="justify-content-center row">
                                      <h5>Curva de Demanda</h5>
                                      &nbsp;
                                      <svg
                                        class="MuiSvgIcon-root"
                                        focusable="false"
                                        viewBox="0 0 24 24"
                                        aria-hidden="true"
                                      >
                                        <path
                                          d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                        ></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="collapse card-body">
                                <div class="justify-content-center row">
                                  <div class="col">
                                    <table class="text-secondary text-center table table-sm">
                                      <thead>
                                        <tr>
                                          <th>Mes</th>
                                          <th>Consumo [dam3/mes]</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Mayo 2023</td>
                                          <td>{{ $analysisOrder->expected_may }}</td>
                                        </tr>
                                        <tr>
                                          <td>Junio 2023</td>
                                          <td>{{ $analysisOrder->expected_june }}</td>
                                        </tr>
                                        <tr>
                                          <td>Julio 2023</td>
                                          <td>{{ $analysisOrder->expected_july }}</td>
                                        </tr>
                                        <tr>
                                          <td>Agosto 2023</td>
                                          <td>{{ $analysisOrder->expected_august }}</td>
              
                                        </tr>
                                        <tr>
                                          <td>Septiembre 2023</td>
                                          <td>{{ $analysisOrder->expected_september }}</td>
                                        </tr>
                                        <tr>
                                          <td>Octubre 2023</td>
                                          <td>{{ $analysisOrder->expected_october }}</td>
                                        </tr>
                                        <tr>
                                          <td>Noviembre 2023</td>
                                          <td>{{ $analysisOrder->expected_november }}</td>
              
                                        </tr>
                                        <tr>
                                          <td>Diciembre 2023</td>
                                          <td>{{ $analysisOrder->expected_december }}</td>
              
                                        </tr>
                                        <tr>
                                          <td>Enero 2024</td>
                                          <td>{{ $analysisOrder->expected_january }}</td>
                                        </tr>
                                        <tr>
                                          <td>Febrero 2024</td>
                                          <td>{{ $analysisOrder->expected_february }}</td>
                                        </tr>
                                        <tr>
                                          <td>Marzo 2024</td>
                                          <td>{{ $analysisOrder->expected_march }}</td>
                                        </tr>
                                        <tr>
                                          <td>Abril 2024</td>
                                          <td>{{ $analysisOrder->expected_april }}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                            <br />
                            <div class="shadow text-secondary card">
                              <div
                                data-open="false"
                                onclick="toggleBody(this)"
                                class="card-title h5"
                              >
                                <br />
                                <div class="justify-content-center text-secondary row">
                                  <div class="col">
                                    <div class="justify-content-center row">
                                      <h5>Condiciones Comerciales</h5>
                                      &nbsp;
                                      <svg
                                        class="MuiSvgIcon-root"
                                        focusable="false"
                                        viewBox="0 0 24 24"
                                        aria-hidden="true"
                                      >
                                        <path
                                          d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                        ></path>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="collapse card-body">
                                <div class="justify-content-md-center row">
                                  <div class="col-lg-10 col-md-12 col-sm-10">
                                    <table
                                      class="text-center text-secondary table table-sm table-hover"
                                    >
                                      <tbody class="text-secondary">
                                        <tr>
                                          <td><b>Producto</b></td>
                                          <td>{{ $analysisOrder->supply_point_name }}</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <b>Plazo del Contrato</b>
                                          </td>
                                        
                                          <td>{{ $analysisOrder->contact_term_days }} days</td>
                                        </tr>
              
                                        @if(!is_null($analysisOrder->start_of_supply))
                                          
                                        
                                        <tr>
                                          <td>
                                            @php
                                            $formatedSupplyStartTimeAnalysis = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $analysisOrder->start_of_supply)->format('F j, Y, g:i a');
                                          @endphp
                                            <b>Inicio de Suministro</b>
                                          </td>
                                          <td>{{ $formatedSupplyStartTimeAnalysis }}t</td>
                                        </tr>
              
              
                                        @endif
                                      
                                        
                                        <tr>
                                          <td>
                                            <b>Tipo de Suministro</b>
                                          </td>
                                          <td> {{ $analysisOrder->type_of_supply }} </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <b>
                                              Exclusividad
                                              <svg
                                                class="MuiSvgIcon-root"
                                                focusable="false"
                                                viewBox="0 0 24 24"
                                                aria-hidden="true"
                                              >
                                                <path
                                                  d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                                ></path>
                                              </svg>
                                            </b>
                                          </td>
                                          <td>{{ $analysisOrder->exclusivity }}</td>
                                        </tr>

                                        <tr>
                                          <td>
                                            <b>Total Quantity</b>
                                          </td>
                                          <td>{{ $analysisOrder->total_quantity }} </td>
                                        </tr>
    


                                        <tr>
                                          <td>
                                            <b>Take or Pay</b>
                                          </td>
                                          <td>{{ $analysisOrder->take_or_pay_percentage }} %</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <b>Deliver or Pay</b>
                                          </td>
                                          <td>{{ $analysisOrder->delivery_or_pay_price }} %</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <b>Plazo de pago</b>
                                          </td>
                                          <td>{{ $analysisOrder->payment_term }} días</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <b>Tasa de Cambio</b>
                                          </td>
                                          <td>{{ $analysisOrder->exchange_rate }}</td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <b>Comisión </b>
                                          </td>
                                          <td>{{ $analysisOrder->auction_commision }}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <div class="justify-content-center row">
                                
                                </div>
                              </div>
                            </div>
                            <br />
                            <div class="shadow text-secondary card">
                              
                              
                            </div>
                            <br />
                          </div>
                        </div>
                      </div>
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
    </div>

    
  </div>


@endsection