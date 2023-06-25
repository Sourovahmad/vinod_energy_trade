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

          style="
          height: auto;
          width: 60%;
          border-radius: 40%;
      "
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
                      <th>Demand [MWh]</th>
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
                <tbody class="text-secondary" style="text-align: start">


                  <tr>
                    <td><b>Supply Point Name</b></td>
                    <td>{{ $openOrder->supply_point_name }}</td>
                  </tr>



                  <tr>
                    <td>
                      <b>Producto</b>
                    </td>
                  
                    <td>{{ $openOrder->purchase_request_for }} </td>
                  </tr>


                  
                  <tr>
                      <td>
                        <b>Natural Gas Distributor POINT OF CONSUMPTION 1 </b>
                      </td>
                    
                      <td>{{ $openOrder->natural_gas_point_of_distribution_consumtion_1 }} </td>
                    </tr>



                          
                  <tr>
                      <td>
                        <b>Natural Gas Tariff POINT OF CONSUMPTION 1
                          RESERVE (dam3/day)
                          </b>
                      </td>
                    
                      <td>{{ $openOrder->reserve }} </td>
                    </tr>



                                 
                  <tr>
                      <td>
                        <b>Contract Term (months)
                          </b>
                      </td>
                    
                      <td>{{ $openOrder->contact_term_months }}  months</td>
                  </tr>




                  
                                 
                  <tr>
                      <td>
                        <b>Cuenca Winter Mix
                          </b>
                      </td>
                    
                      <td> {{ $openOrder->winter_mqn }}% NQN, {{ $openOrder->winter_pto }}% PTO,  {{ $openOrder->winter_scr }}% SCR, {{ $openOrder->winter_chu }}% CHU, {{ $openOrder->winter_noa }}% NOA</td>
                  </tr>


                  <tr>
                      <td>
                        <b>Cuenca Summer Mix
                          </b>
                      </td>
                    
                      <td> {{ $openOrder->summer_mqn }}% NQN, {{ $openOrder->summer_pto }}% PTO,  {{ $openOrder->summer_scr }}% SCR, {{ $openOrder->summer_chu }}% CHU, {{ $openOrder->summer_noa }}% NOA</td>
                  </tr>



                  <tr>
                      <td>
                        <b>Type of Supply
                          </b>
                      </td>
                    
                      <td> {{$openOrder->type_of_supply}}</td>
                  </tr>


                  
                  <tr>
                      <td>
                        <b>Exclusivity
                          </b>
                      </td>
                    
                      <td> {{$openOrder->exclusivity}}</td>
                  </tr>


                  
                  
                  <tr>
                      <td>
                        <b>Partial Award
                          </b>
                      </td>
                    
                      <td> {{$openOrder->partial_award}}</td>
                  </tr>



                     
                  <tr>
                      <td>
                        <b>Price
                          </b>
                      </td>
                    
                      <td> {{$openOrder->price}}</td>
                  </tr>


                  <tr>
                      <td>
                        <b>Price Renegotiation Clause
                          </b>
                      </td>
                    
                      <td> {{$openOrder->price_renegotiation}}</td>
                  </tr>



                  <tr>
                      <td>
                        <b>Take or Pay optional to the Seller
                          </b>
                      </td>
                    
                      <td> {{$openOrder->take_or_pay_optional_to_seller}}</td>
                  </tr>




                  <tr>
                      <td>
                        <b>Take or Pay (0 to 100%)
                          </b>
                      </td>
                    
                      <td> {{$openOrder->take_or_pay_percentage}}</td>
                  </tr>


                  

                  <tr>
                      <td>
                        <b>Take or Pay price
                          </b>
                      </td>
                    
                      <td> {{$openOrder->take_or_pay_price}}</td>
                  </tr>




                              

                  <tr>
                      <td>
                        <b>Optional Delivery or Pay to the Seller
                          </b>
                      </td>
                    
                      <td> {{$openOrder->optional_delivery_to_seller}}</td>
                  </tr>



                                        

                  <tr>
                      <td>
                        <b>Optional Delivery or Pay price
                          </b>
                      </td>
                    
                      <td> {{$openOrder->delivery_or_pay_price}} USD/MMBtu </td>
                  </tr>






                                              

                  <tr>
                      <td>
                        <b>Payment term
                          </b>
                      </td>
                    
                      <td> {{$openOrder->payment_term}} days </td>
                  </tr>



                  <tr>
                      <td>
                        <b>
                          Exchange Rate
                          </b>
                      </td>
                    
                      <td> {{$openOrder->exchange_rate}} </td>
                  </tr>


                  <tr>
                      <td>
                        <b>
                          Default Rate Debts in USD
                          </b>
                      </td>
                    
                      <td> {{$openOrder->default_rates_debts}} %</td>
                  </tr>



                  <tr>
                      <td>
                        <b>
                          Mortgage Rate Debts in Pesos
                          </b>
                      </td>
                    
                      <td> {{$openOrder->mortage_rate_debts}} %</td>
                  </tr>




                  
                  <tr>
                      <td>
                        <b>
                          Auction Commission
                          </b>
                      </td>
                    
                      <td> {{$openOrder->auction_commision ? $openOrder->auction_commision : '0'}} %</td>
                  </tr>




                  <tr>
                      <td>
                        <b>
                          Bid Maintenance Guarantee
                          </b>
                      </td>
                    
                      <td> {{$openOrder->bid_maintain_gurantee}} USD</td>
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
                      <b>Total Quantity</b>
                    </td>
                    <td>{{ $openOrder->total_quantity }} </td>
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

                    <input type="text" name="bid_id" value="{{ $currentBid->id }}" required hidden>

                    @else

                        <input type="text" name="status" value="create" required hidden>


                    @endif


                    @if($openOrder->purchase_request_for == 'NATURAL GAS')
                      

                    <div class="col">
                      <label class="form-label">Price January </label>
                    </div>
                    <div class="col">
                      <input
                        type="number"
                        step="0.01"
                        placeholder="USD/ MMbtu"
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
                      step="0.01"
                        placeholder="USD/ MMbtu"
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
                      <input type="number" placeholder="USD/ MMbtu" class="form-control" name="price_march"             
                          value="{{ $currentBid ? $currentBid->price_march : '' }}"  step="0.01" required />
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
                      <input type="number" placeholder="USD/ MMbtu" class="form-control" name="price_april" 
                      value="{{ $currentBid ? $currentBid->price_april : '' }}"  step="0.01"
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
                      <input type="number" placeholder="USD/ MMbtu" class="form-control" name="price_may"
                      value="{{ $currentBid ? $currentBid->price_may : '' }}"  step="0.01"
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
                      <input placeholder="USD/ MMbtu" class="form-control" name="price_june"
                      value="{{ $currentBid ? $currentBid->price_june : '' }}"  step="0.01"
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
                      <input type="number" placeholder="USD/ MMbtu" class="form-control" name="price_july"
                      value="{{ $currentBid ? $currentBid->price_july : '' }}"  step="0.01"
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
                      <input type="number" placeholder="USD/ MMbtu" class="form-control" name="price_august"
                      value="{{ $currentBid ? $currentBid->price_august : '' }}"  step="0.01"

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
                      <input  type="number" placeholder="USD/ MMbtu" class="form-control" name="price_september"
                      value="{{ $currentBid ? $currentBid->price_september : '' }}"  step="0.01"

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
                      <input type="number" placeholder="USD/ MMbtu" class="form-control" name="price_october" 
                      value="{{ $currentBid ? $currentBid->price_october : '' }}"  step="0.01"

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
                      <input type="number" placeholder="USD/ MMbtu" class="form-control" name="price_november"
                      value="{{ $currentBid ? $currentBid->price_november : '' }}"  step="0.01"

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
                      <input type="number" placeholder="USD/ MMbtu" class="form-control" name="price_december"
                      value="{{ $currentBid ? $currentBid->price_december : '' }}"  step="0.01"

                      required
                      />
                    </div>
                    <div class="col-xl-1"></div>
                  </div>
                </div>

                @else



                            
                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col">
                      <label class="form-label">Price </label>
                    </div>
                    <div class="col">
                      <input type="number" placeholder="USD/MWh" class="form-control" name="electricity_price"
                      value="{{ $currentBid ? $currentBid->electricity_price : '' }}"  step="0.01"

                      @if(!$currentBid)
                         required
                      @endif
                      
                      
                      />
                    </div>
                    <div class="col-xl-1"></div>
                  </div>
                </div>



                @endif





                @if($openOrder->take_or_pay_optional_to_seller == 'YES')


                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col">
                      <label class="form-label">Optinal Take or pay to the seller (0%-100%)</label>
                    </div>
                    <div class="col">
                      <input type="number" placeholder="0%-100%" class="form-control" name="optional_take_or_pay_to_seller" min="0" max="100"
                      
                      value="{{ $currentBid ? $currentBid->optional_take_or_pay_to_seller : '' }}"  step="0.01"
                      
                      
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
                      value="{{ $currentBid ? $currentBid->optional_delivery_or_pay_to_seller : '' }}"  step="0.01"

                      
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