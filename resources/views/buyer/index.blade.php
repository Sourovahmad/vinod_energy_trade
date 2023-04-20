<html lang="es">
    <head>
        <title>CONECTO ENERGIA</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/buyer_main_css.css') }}" />
        <script src="{{ asset('js/buyerConfig.js') }}" defer></script>
    </head>
    <body>
      <div id="root">
        <nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
          <span class="navbar-brand">
            <a href="#" class="nav-link" role="button"
              ><img
                alt="Image"
                src="https://conectoenergia.com/logoConecto.636f4a8f.png"
                class="img-fluid d-inline"
            /></a>
          </span>
          <button
            aria-controls="responsive-navbar-nav"
            type="button"
            aria-label="Toggle navigation"
            class="navbar-toggler collapsed"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="responsive-navbar-nav">
            <div class="ml-auto navbar-nav">
              <a href="#" class="ml-auto nav-link" role="button">
                <svg
                  class="MuiSvgIcon-root MuiSvgIcon-colorAction"
                  focusable="false"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                </svg>
              </a>
              <a href="#" class="ml-auto nav-link" role="button">
                <svg
                  class="MuiSvgIcon-root MuiSvgIcon-colorAction"
                  focusable="false"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    d="M7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2c.15-2.65 1.51-4.97 3.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43c2.02 1.45 3.39 3.77 3.54 6.42zM18 11c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2v-5zm-6 11c.14 0 .27-.01.4-.04.65-.14 1.18-.58 1.44-1.18.1-.24.15-.5.15-.78h-4c.01 1.1.9 2 2.01 2z"
                  ></path>
                </svg>
                <h6></h6>
              </a>
              <a href="#" class="ml-auto nav-link" role="button">
                <svg
                  class="MuiSvgIcon-root MuiSvgIcon-colorAction"
                  focusable="false"
                  viewBox="0 0 24 24"
                  aria-hidden="true"
                >
                  <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"
                  ></path>
                </svg>
                {{ auth()->user()->name }}
              </a>
            </div>
          </div>
        </nav>


        <div class="justify-content-md-center row">
          <div class="text-center col-12"></div>
        </div>




        <div class="justify-content-md-center row">
          <div class="col-xl-5 col-md-12 pl-4">
            <br />
            <div class="container-fluid">
              <div class="row justify-content-between">
                <div class="row ml-3 d-flex justify-content-between">
                  <div aria-label="Basic example" role="group" class="btn-group">
                    
                    
                    
                  </div>
                </div>

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
                  Add
                </button>
              </a>
              </div>
              <br />
              <div class="row">
                <div class="col-6">
                  <h5 class="text text-secondary">Your Orders</h5>
                </div>
                <div class="text-right col">
                  <div class="justify-content-end row">
                    <div class="dropdown">
                      <button
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        class="dropdown-toggle btn btn-outline-secondary btn btn-sm"
                      >
                        Enterprise
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                    &nbsp;
                    <div class="dropdown">
                      <button
                        aria-haspopup="true"
                        aria-expanded="false"
                        id="dropdown-estado"
                        type="button"
                        class="dropdown-toggle btn btn-outline-secondary btn btn-sm"
                      >
                        State
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="container-fluid">
              <div class="justify-content-center row">
                <h5 class="text-success">
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
                    <b>Quantity</b>
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
                    <div class="text-center col">{{ $openOrder->total_quantity }}</div>
                    
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


              <div class="justify-content-center row">
                <h5 class="text-success">
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
                    <b>Quantity</b>
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
                    $requestTime = $analysisOrder->deadline_offer_recive;
                      $formattedTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTime)->format('F j, Y, g:i a');
                    @endphp
                    <div class="text-center col-1">{{  $formattedTime }} </div>
                    <div class="text-center col">{{ $analysisOrder->total_quantity }}</div>
                    
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


              <div class="justify-content-center row">
                <h5 class="text-success">
                  <br />
                  Awarded
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
                    <b>Quantity</b>
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
                    $requestTime = $awardedOrder->deadline_offer_recive;
                      $formattedTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTime)->format('F j, Y, g:i a');
                    @endphp
                    <div class="text-center col-1">{{  $formattedTime }} </div>
                    <div class="text-center col">{{ $awardedOrder->total_quantity }}</div>
                    
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





              <div class="justify-content-center row">
                <h5 class="text-danger">
                  <br />
                  Deserts
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
                    <b>Quantity</b>
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
                    $requestTime = $desertOrder->deadline_offer_recive;
                      $formattedTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $requestTime)->format('F j, Y, g:i a');
                    @endphp
                    <div class="text-center col-1">{{  $formattedTime }} </div>
                    <div class="text-center col">{{ $desertOrder->total_quantity }}</div>
                    
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
            <div class="row"><br /></div>
          </div>
          <div class="col-xl-7 col-md-12">
            <br />
            <div class="shadow text-center card border-secondary">
              <div class="row">
                <div class="col-md-4">
                  <img
                    src="https://firebasestorage.googleapis.com/v0/b/conecto-energia.appspot.com/o/companyImages%2Ffiasa.jpeg?alt=media&amp;token=6dad9ee3-eab6-47b5-a13f-7b1e168fcff1"
                    width="200"
                    height="106"
                    alt=""
                  />
                </div>
                <div class="col-md-4">
                  <br />
                  <div class="justify-content-center row">
                    <b>Frio Industrias Argentinas S.A.</b>
                  </div>
                  <div class="col">
                    <div class="justify-content-center row">
                      Plant R22 - Nitric Acid
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
                  Order ID: FIA-GN-04<br />
                  <a class="text text-center text"><b>Annual Open Gas</b></a
                  ><br />
                  <b class="text-success">Purchase</b>
                </div>
              </div>
              <div class="card-body">
                <div class="shadow p-3 mb-5 bg-white rounded card border-success">
                  <div class="justify-content-center row">
                    <div class="col-4">
                      <div class="justify-content-center row">
                        <h6 class="text-success">
                          <b>Round 1</b>
                        </h6>
                      </div>
                      <div class="justify-content-center row">
                        <h6 class="text-success">
                          <b>Bidding  </b>
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
                        <h6>Opens on: 4  April  00:00hs</h6>
                      </div>
                      <div class="justify-content-center row">
                        <h6>Closes on: 12 April  21:00hs</h6>
                      </div>
                    </div>
                  </div>
                  <div class="justify-content-center row">
                    <a class="text-secondary"
                      >Offers with different payment terms are accepted
                      </a
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
                          <span>3 days 05:07:42</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


              {{-- offer for seller start --}}

                <div class="row">
                  <div class="col"></div>
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">


                        <div class="row">
                          <div class="col">Enter Your offer</div>
                          <div class="col-sm-7">
                            <b>Suggested payment term:</b>
                            30 días
                          </div>
                        </div>
                      </div>
                      <form class="">
                        <div class="form-group">
                          <br />
                          <div class="row">
                            <div class="col">
                              <label class="form-label">Summer Price</label>
                            </div>
                            <div class="col">
                              <input
                                min="0"
                                max="10"
                                step="0.01"
                                placeholder="0.00 USD/MMBTU"
                                class="form-control"
                                value=""
                              />
                            </div>
                            <div class="col-xl-1"></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col">
                              <label class="form-label">Winter Price</label>
                            </div>
                            <div class="col">
                              <input
                                min="0"
                                max="10"
                                step="0.01"
                                placeholder="0.00 USD/MMBTU"
                                class="form-control"
                                value=""
                              />
                            </div>
                            <div class="col-xl-1"></div>
                          </div>
                          <br />
                          <div class="row">
                            <div class="col">
                              <h6 class="text-secondary">Average Price</h6>
                            </div>
                            <div class="col">
                              <h6 class="text-secondary">-- USD/MMBTU</h6>
                              <small class="text-secondary"> -- USD/dam3</small>
                            </div>
                            <div class="col-xl-1"></div>
                          </div>
                          <div class="justify-content-center row">
                            <small class="text-secondary"
                              >Your offer is incomplete</small
                            >
                          </div>
                          <hr />
                          <div class="row">
                            <div class="col">
                              <label class="text-success form-label">
                                Offered Payment Term<br />
                                [calendar days]
                              </label>
                            </div>
                            <div class="col">
                              <input
                                placeholder="días"
                                class="form-control"
                                value="30"
                              />
                            </div>
                          </div>
                          <br />
                          <div class="justify-content-center row">
                            <small class="text-secondary"
                              ><b>Optional:</b>Upload your contract model</small
                            >
                          </div>
                          <br />
                          <div class="justify-content-center row">
                            <h4 class="text-danger">
                              <span>3 days 05:07:42</span>
                            </h4>
                          </div>
                        </div>
                        <div class="justify-content-center row">
                          <div class="col-1"></div>
                          <div class="col">
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                              /><label title="" class="form-check-label"
                                >I accept the Particular Terms and Conditions of the Purchase Order</label
                              >
                            </div>
                          </div>
                          <div class="col-1"></div>
                        </div>
                        <br />
                        <div class="justify-content-center row">
                          <div class="col-1"></div>
                          <div class="col">
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                checked=""
                              />
                              <label title="" class="form-check-label"
                                >I accept the 7-day offer validity period from the closing date and time of this Round.
                               </label
                              >
                            </div>
                          </div>
                          <div class="col-1"></div>
                        </div>
                        <div class="justify-content-center row">
                          <div class="col-1"></div>
                          <div class="col">
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input"
                              /><label title="" class="form-check-label"
                                >Modify the Term of Validity of the Offer</label
                              >
                            </div>
                            <br />
                          </div>
                          <div class="col-1"></div>
                        </div>
                      </form>
                      <br />
                      <button
                        disabled=""
                        type="button"
                        class="btn btn-outline-primary"
                      >
                        Send Offer
                      </button>
                    </div>
                  </div>
                </div>

                {{-- offer for seller end --}}



                <br />
                <div class="shadow card">
                  <div class="card-title h5">
                    <br />
                    <div class="justify-content-center text-secondary row">
                      <div class="col">
                        <div class="justify-content-center row">
                          <h5>Detail of your Offers</h5>
                          &nbsp;
                          <svg
                            class="MuiSvgIcon-root"
                            focusable="false"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                          >
                            <path
                              d="M7.41 18.59L8.83 20 12 16.83 15.17 20l1.41-1.41L12 14l-4.59 4.59zm9.18-13.18L15.17 4 12 7.17 8.83 4 7.41 5.41 12 10l4.59-4.59z"
                            ></path>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="collapse show card-body">
                    <div class="text text-secondary justify-content-center row">
                      <div class="col-2">
                        <div role="group" class="dropdown btn-group">
                          <button
                            aria-haspopup="true"
                            aria-expanded="false"
                            id="round-selector"
                            type="button"
                            class="dropdown-toggle btn btn-secondary btn-sm"
                          >
                            
                          Round 1
                          </button>
                        </div>
                      </div>
                      <div class="col-5">
                        <h5>Qty. of Own Offers : 0 </h5>
                      </div>
                      <div class="text-right col">
                        <button type="button" class="btn btn-outline-info btn-sm">
                          <svg
                            class="MuiSvgIcon-root"
                            focusable="false"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                          >
                            <path
                              d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"
                            ></path>
                          </svg>
                          Analyze/Export
                        </button>
                      </div>
                    </div>
                    <br />
                    <div class="justify-content-center row">
                      <table
                        class="MuiTable-root text text-secondary text-center"
                      >
                        <thead>
                          <tr>
                            <th align="center">Offerer</th>
                            <th align="center">Winter</th>
                            <th align="center">Summer</th>
                            <th align="center">Annual Average</th>
                            <th align="center">Payment Term</th>
                            <th align="center">Valid up to</th>
                            <th align="center">Hour</th>
                            <th align="center">
                              <svg
                                class="MuiSvgIcon-root"
                                focusable="false"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                              >
                                <path
                                  d="M16.5 6v11.5c0 2.21-1.79 4-4 4s-4-1.79-4-4V5c0-1.38 1.12-2.5 2.5-2.5s2.5 1.12 2.5 2.5v10.5c0 .55-.45 1-1 1s-1-.45-1-1V6H10v9.5c0 1.38 1.12 2.5 2.5 2.5s2.5-1.12 2.5-2.5V5c0-2.21-1.79-4-4-4S7 2.79 7 5v12.5c0 3.04 2.46 5.5 5.5 5.5s5.5-2.46 5.5-5.5V6h-1.5z"
                                ></path>
                              </svg>
                            </th>
                          </tr>
                        </thead>
                        <tbody></tbody>
                      </table>
                      <div class="row">
                        <small
                          >Your submitted Offers will only be visible when the Round be decrypted</small
                        >
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
                          <h5>Comments and additional information of the Order
                          </h5>
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
                    <p>Test</p>
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
                          <h5>Demand Curve</h5>
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
                              <th>Month</th>
                              <th>Consumption  [dam3/month]</th>
                              <th>CMD [dam3/day]</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Mayo 2023</td>
                              <td>70</td>
                              <td>2.8</td>
                            </tr>
                           
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="justify-content-center row">
                      <div class="card" style="width: 90%">
                        <div class="card-body">
                          <div class="justify-content-center row">
                            <h6 class="text-secondary">
                              Daily Averages
                              <br />
                              <b>[dam3/day]</b>
                            </h6>
                          </div>
                          <div class="justify-content-center row">
                            <div class="col">
                              <p class="text-primary">Volume: 2.41</p>
                            </div>
                            <div class="col">
                              <p class="text-warning">CMD: 2.80</p>
                            </div>
                          </div>
                          <div style="height: 95%; width: 100%">
                            <div
                              id="reactgooglegraph-1"
                              class=""
                              style="height: 95%; width: 100%"
                            >
                              <div style="position: relative">
                                <div
                                  dir="ltr"
                                  style="
                                    position: relative;
                                    width: 400px;
                                    height: 200px;
                                  "
                                >
                                  <div
                                    aria-label="A chart."
                                    style="
                                      position: absolute;
                                      left: 0px;
                                      top: 0px;
                                      width: 100%;
                                      height: 100%;
                                    "
                                  >
                                    <svg
                                      width="400"
                                      height="200"
                                      aria-label="A chart."
                                      style="overflow: hidden"
                                    >
                                      <defs id="_ABSTRACT_RENDERER_ID_14">
                                        <clipPath id="_ABSTRACT_RENDERER_ID_15">
                                          <rect
                                            x="67"
                                            y="38"
                                            width="267"
                                            height="124"
                                          ></rect>
                                        </clipPath>
                                      </defs>
                                      <rect
                                        x="0"
                                        y="0"
                                        width="400"
                                        height="200"
                                        stroke="none"
                                        stroke-width="0"
                                        fill="#ffffff"
                                      ></rect>
                                      <g>
                                        <rect
                                          x="67"
                                          y="38"
                                          width="267"
                                          height="124"
                                          stroke="none"
                                          stroke-width="0"
                                          fill-opacity="0"
                                          fill="#ffffff"
                                        ></rect>
                                        <g
                                          clip-path="url(https://conectoenergia.com/marketplace#_ABSTRACT_RENDERER_ID_15)"
                                        >
                                          <g>
                                            <rect
                                              x="67"
                                              y="161"
                                              width="267"
                                              height="1"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#cccccc"
                                            ></rect>
                                            <rect
                                              x="67"
                                              y="100"
                                              width="267"
                                              height="1"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#cccccc"
                                            ></rect>
                                            <rect
                                              x="67"
                                              y="38"
                                              width="267"
                                              height="1"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#cccccc"
                                            ></rect>
                                            <rect
                                              x="67"
                                              y="130"
                                              width="267"
                                              height="1"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#ebebeb"
                                            ></rect>
                                            <rect
                                              x="67"
                                              y="69"
                                              width="267"
                                              height="1"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#ebebeb"
                                            ></rect>
                                          </g>
                                          <g>
                                            <rect
                                              x="67"
                                              y="161"
                                              width="267"
                                              height="1"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#333333"
                                            ></rect>
                                          </g>
                                          <g>
                                            <path
                                              d="M78.58333333333333,38.5L100.75,38.5L122.91666666666667,38.5L145.08333333333334,38.5L167.25,38.5L189.41666666666669,38.5L211.58333333333334,38.5L233.75,38.5L255.91666666666669,38.5L278.08333333333337,38.5L300.25,38.5L322.4166666666667,38.5"
                                              stroke="#0d60ff"
                                              stroke-width="2"
                                              fill-opacity="1"
                                              fill="none"
                                            ></path>
                                            <path
                                              d="M78.58333333333333,38.5L100.75,38.5L122.91666666666667,38.5L145.08333333333334,38.5L167.25,38.5L189.41666666666669,38.5L211.58333333333334,38.5L233.75,38.5L255.91666666666669,38.5L278.08333333333337,38.5L300.25,38.5L322.4166666666667,38.5"
                                              stroke="#ffc106"
                                              stroke-width="2"
                                              fill-opacity="1"
                                              fill="none"
                                            ></path>
                                          </g>
                                        </g>
                                        <g></g>
                                        <g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="78.58333333333333"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              May
                                            </text>
                                          </g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="100.75"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              Jun
                                            </text>
                                          </g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="122.91666666666667"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              Jul
                                            </text>
                                          </g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="145.08333333333334"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              Ago
                                            </text>
                                          </g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="167.25"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              Sep
                                            </text>
                                          </g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="189.41666666666669"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              Oct
                                            </text>
                                          </g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="211.58333333333334"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              Nov
                                            </text>
                                          </g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="233.75"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              dec
                                            </text>
                                          </g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="255.91666666666669"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              Ene
                                            </text>
                                          </g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="278.08333333333337"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              Feb
                                            </text>
                                          </g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="300.25"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              Mar
                                            </text>
                                          </g>
                                          <g>
                                            <text
                                              text-anchor="middle"
                                              x="322.4166666666667"
                                              y="178.35"
                                              font-family="Arial"
                                              font-size="11"
                                              stroke="none"
                                              stroke-width="0"
                                              fill="#222222"
                                            >
                                              Abr
                                            </text>
                                          </g>
                                        </g>
                                      </g>
                                      <g>
                                        <g>
                                          <text
                                            text-anchor="middle"
                                            x="31.85"
                                            y="100"
                                            font-family="Arial"
                                            font-size="11"
                                            font-style="italic"
                                            transform="rotate(-90 31.85 100)"
                                            stroke="none"
                                            stroke-width="0"
                                            fill="#222222"
                                          >
                                            (dam3/day)
                                          </text>
                                          <path
                                            d="M22.499999999999996,162L22.500000000000004,38L33.50000000000001,38L33.5,162Z"
                                            stroke="none"
                                            stroke-width="0"
                                            fill-opacity="0"
                                            fill="#ffffff"
                                          ></path>
                                        </g>
                                      </g>
                                      <g></g>
                                    </svg>
                                    <div
                                      aria-label="A tabular representation of the data in the chart."
                                      style="
                                        position: absolute;
                                        left: -10000px;
                                        top: auto;
                                        width: 1px;
                                        height: 1px;
                                        overflow: hidden;
                                      "
                                    >
                                      <table>
                                        <thead>
                                          <tr>
                                            <th>Mes</th>
                                            <th>dam3/mes</th>
                                            <th>dam3/día</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>May</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                          <tr>
                                            <td>Jun</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                          <tr>
                                            <td>Jul</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                          <tr>
                                            <td>Ago</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                          <tr>
                                            <td>Sep</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                          <tr>
                                            <td>Oct</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                          <tr>
                                            <td>Nov</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                          <tr>
                                            <td>Dic</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                          <tr>
                                            <td>Ene</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                          <tr>
                                            <td>Feb</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                          <tr>
                                            <td>Mar</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                          <tr>
                                            <td>Abr</td>
                                            <td>2</td>
                                            <td>2</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  aria-hidden="true"
                                  style="
                                    display: none;
                                    position: absolute;
                                    top: 210px;
                                    left: 410px;
                                    white-space: nowrap;
                                    font-family: Arial;
                                    font-size: 11px;
                                  "
                                >
                                  ...
                                </div>
                                <div></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br />
                      <br />
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
                          <h5>Trading Conditions</h5>
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
                              <td><b>Product</b></td>
                              <td>tt</td>
                            </tr>
                            <tr>
                              <td>
                                <b>Contract Term</b>
                              </td>
                              <td>1 year</td>
                            </tr>
                            <tr>
                              <td>
                                <b>Start of Supply</b>
                              </td>
                              <td>1 de Mayo 06:00hs</td>
                            </tr>
                            <tr>
                              <td>
                                <b>Total Quantity</b>
                              </td>
                              <td>880 [dam3]</td>
                            </tr>
                            <tr>
                              <td><b>Quality</b></td>
                              <td>9300 [kcal/m3]</td>
                            </tr>
                            <tr>
                              <td>
                                <b>Mix de Cuenca</b>
                              </td>
                              <td>Ecogas Cuyo</td>
                            </tr>
                            <tr>
                              <td>
                                <b>Type of Supply</b>
                              </td>
                              <td>Firme</td>
                            </tr>
                            <tr>
                              <td>
                                <b>
                                  Exclusivity
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
                              <td>Si</td>
                            </tr>
                            <tr>
                              <td>
                                <b>Take or Pay</b>
                              </td>
                              <td>0 %</td>
                            </tr>
                            <tr>
                              <td>
                                <b>Deliver or Pay</b>
                              </td>
                              <td>100 %</td>
                            </tr>
                            <tr>
                              <td>
                                <b>Payment term</b>
                              </td>
                              <td>30 días</td>
                            </tr>
                            <tr>
                              <td>
                                <b>Exchange Rate</b>
                              </td>
                              <td>BNA Vendedor Billete</td>
                            </tr>
                            <tr>
                              <td>
                                <b>Commission</b>
                              </td>
                              <td>A cargo del Comprador</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="justify-content-center row">
                      <a target="_blank" href="#"
                        >Particular Terms and Conditions of the Order Purchase</a
                      >
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
                          <h5>Consultations
                          </h5>
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
                      <div class="col-sm-11">No Inquiries Yet</div>
                    </div>
                    <br />
                    <div class="justify-content-center row">
                      <div class="col-sm-11">
                        <div class="form-group">
                          <textarea
                            placeholder="Make an enquiry"
                            rows="3"
                            id="exampleForm.ControlTextarea1"
                            class="form-control"
                          ></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="text-right col-sm-11">
                        <button type="button" class="btn btn-primary">
                          submit
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </body>
</html>
