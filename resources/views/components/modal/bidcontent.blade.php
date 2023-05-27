<div class="modal-content">
    <div class="modal-header">


      <h5 class="modal-title" id="exampleModalLabel">Order: {{ $openOrder->supply_point_name }}  </h5>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="shadow text-center card border-secondary">




        <div class="text-center mb-4 mt-4">

          <h4>Order Information</h4>
        </div>






        {{-- bid information end here --}}
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


          <br />
      </div>



      <div class="container">
        
        @forelse ($bids as $currentBid)

        <div class="row">
          <div class="col"></div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">


                <div class="row">
                  <div class="col h4">Bid No:  {{ $loop->index }} </div>
                  <div class="col-sm-7">
                    <b>Bid Created By : </b>
                  {{ $currentBid->user->social_name }}
                  </div>
                </div>
              </div>
              <form method="post" action="{{ route('submit_bid') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                  <br />
                  <div class="row">

                    <input type="text" name="order_id" value="{{ $openOrder->id }}" required hidden>


                    <input type="text" name="status" value="update" required hidden>

                

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
                        required
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
                        required
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
                          value="{{ $currentBid ? $currentBid->price_march : '' }}" required />
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
                      required
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
                      required
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
                      required
                      
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
                      required
                      
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

                      required
                      
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

                      required
                      
                      
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

                      required
                      
                      
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

                      required
                      
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

                      required
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
                
              
                
              </form>
           
            </div>
          </div>
        </div>
            
        @empty
            
        @endforelse

      </div>


      
      </div>









      
    </div>
    <div class="modal-footer">





    </div>
  </div>

