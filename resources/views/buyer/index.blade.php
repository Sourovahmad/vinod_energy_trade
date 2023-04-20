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
          <div class="col-xl-12 col-md-12 pl-4">
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

          {{--  sider code was there --}}
          
        </div>
      </div>
      
    </body>
</html>
