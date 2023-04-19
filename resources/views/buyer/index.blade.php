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
                    <button type="button" class="btn btn-primary">
                      <svg
                        class="MuiSvgIcon-root"
                        focusable="false"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <path
                          d="M13.5.67s.74 2.65.74 4.8c0 2.06-1.35 3.73-3.41 3.73-2.07 0-3.63-1.67-3.63-3.73l.03-.36C5.21 7.51 4 10.62 4 14c0 4.42 3.58 8 8 8s8-3.58 8-8C20 8.61 17.41 3.8 13.5.67zM11.71 19c-1.78 0-3.22-1.4-3.22-3.14 0-1.62 1.05-2.76 2.81-3.12 1.77-.36 3.6-1.21 4.62-2.58.39 1.29.59 2.65.59 4.04 0 2.65-2.15 4.8-4.8 4.8z"
                        ></path>
                      </svg>
                       Natural Gas
                    </button>
                    <button type="button" class="btn btn-secondary">
                      <svg
                        class="MuiSvgIcon-root"
                        focusable="false"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <path
                          d="M12 2.02c-5.51 0-9.98 4.47-9.98 9.98s4.47 9.98 9.98 9.98 9.98-4.47 9.98-9.98S17.51 2.02 12 2.02zm0 17.96c-4.4 0-7.98-3.58-7.98-7.98S7.6 4.02 12 4.02 19.98 7.6 19.98 12 16.4 19.98 12 19.98zM12.75 5l-4.5 8.5h3.14V19l4.36-8.5h-3z"
                        ></path>
                      </svg>
                    </button>
                    <button type="button" class="btn btn-secondary" disabled="">
                      <svg
                        class="MuiSvgIcon-root"
                        focusable="false"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                      >
                        <path
                          d="M19.77 7.23l.01-.01-3.72-3.72L15 4.56l2.11 2.11c-.94.36-1.61 1.26-1.61 2.33 0 1.38 1.12 2.5 2.5 2.5.36 0 .69-.08 1-.21v7.21c0 .55-.45 1-1 1s-1-.45-1-1V14c0-1.1-.9-2-2-2h-1V5c0-1.1-.9-2-2-2H6c-1.1 0-2 .9-2 2v16h10v-7.5h1.5v5c0 1.38 1.12 2.5 2.5 2.5s2.5-1.12 2.5-2.5V9c0-.69-.28-1.32-.73-1.77zM12 10H6V5h6v5zm6 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                </div>
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
              </div>
              <br />
              <div class="row">
                <div class="col-6">
                  <h5 class="text text-secondary">Natural Gas Orders</h5>
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
                    <b>Point</b>
                  </div>
                  <div class="text-center col-1" style="font-size: 10px">
                    <b>dam3/d</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>Close</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>Round</b>
                  </div>
                </div>
                <div
                  class="shadow card border-primary"
                  style="padding: 5px; width: 100%; cursor: pointer"
                >
                  <div class="align-items-center row" style="font-size: 11px">
                    <div class="text-center col-2">FIA-GN-04</div>
                    <div class="text-center col">FIA-Villa Mercedes</div>
                    <div class="text-center col-1">3</div>
                    <div class="text-center col">12 Abr 21:00hs</div>
                    <div class="text-center col">
                      <svg
                        class="MuiSvgIcon-root text-success"
                        focusable="false"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                        style="font-size: 14px"
                      >
                        <path
                          d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"
                        ></path>
                      </svg>
                      <span class="badge badge-success badge">Round 1 </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="justify-content-center row">
                <h5 class="tex text-primary">
                  <br />
                  In Analysis
                </h5>
                <div class="row" style="width: 100%">
                  <div class="text-center col-2" style="font-size: 10px">
                    <b>ID</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>Point</b>
                  </div>
                  <div class="text-center col-1" style="font-size: 10px">
                    <b>dam3/d</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>Defines</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>Round</b>
                  </div>
                  <div class="text-center col-1" style="font-size: 10px">
                    <b>State</b>
                  </div>
                </div>
                <div
                  class="shadow card border-secondary"
                  style="padding: 5px; width: 100%; cursor: pointer"
                >
                  <div class="align-items-center row" style="font-size: 11px">
                    <div class="text-center col-2">CON-GN-01</div>
                    <div class="text-center col">multiple</div>
                    <div class="text-center col-1">11</div>
                    <div class="text-center col">22 apr 20:30hs</div>
                    <div class="text-center col">
                      <svg
                        class="MuiSvgIcon-root text-primary"
                        focusable="false"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                        style="font-size: 14px"
                      >
                        <path
                          d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"
                        ></path>
                      </svg>
                      <span class="badge badge-primary badge">Ronda 1 </span>
                    </div>
                    <div class="text-center col-1">
                      <svg
                        class="MuiSvgIcon-root text text-success"
                        focusable="false"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                        style="font-size: 14px"
                      >
                        <path
                          d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <div class="justify-content-center row">
                <h5 class="tex text-info">
                  <br />
                  Awarded
                </h5>
                <div class="row" style="width: 100%">
                  <div class="text-center col-2" style="font-size: 10px">
                    <b>ID</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>point</b>
                  </div>
                  <div class="text-center col-1" style="font-size: 10px">
                    <b>dam3/d</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>Closing</b>
                  </div>
                  <div class="text-center col-2" style="font-size: 10px">
                    <b>USD/MMBTU</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>Buyer</b>
                  </div>
                </div>
                
                
                <div
                  class="shadow card border-secondary"
                  style="padding: 5px; width: 100%; cursor: pointer"
                >
                  <div class="align-items-center row" style="font-size: 11px">
                    <div class="text-center col-2">GEO-GN-02</div>
                    <div class="text-center col">Planta Rio Segundo</div>
                    <div class="text-center col-1">6</div>
                    <div class="text-center col">29 Mar 01:00hs</div>
                    <div class="text-center col">6.15</div>
                    <div class="text-center col">Georgalos</div>
                  </div>
                </div>

              </div>
              <div class="justify-content-center row">
                <h5 class="text text-secondary">
                  <br />
                  Awarded to third parties
                </h5>
                <div class="row" style="width: 100%">
                  <div class="text-center col-2" style="font-size: 10px">
                    <b>ID</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>point</b>
                  </div>
                  <div class="text-center col-1" style="font-size: 10px">
                    <b>dam3/d</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>Closing</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>Ranking</b>
                  </div>
                </div>
                
                
                
                
                <div
                  class="shadow card border-secondary"
                  style="padding: 5px; width: 100%; cursor: pointer"
                >
                  <div class="align-items-center row" style="font-size: 11px">
                    <div class="text-center col-2">SAM-01</div>
                    <div class="text-center col">SAM-Famaillá</div>
                    <div class="text-center col-1">150</div>
                    <div class="text-center col">24 Abr 03:00hs</div>
                    <div class="text-center col">
                      <small>En elaboración</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="justify-content-center row">
                <h5 class="text text-danger">
                  <br />
                  Deserts
                </h5>
                <div class="row" style="width: 100%">
                  <div class="text-center col-2" style="font-size: 10px">
                    <b>ID</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>point</b>
                  </div>
                  <div class="text-center col-1" style="font-size: 10px">
                    <b>dam3/d</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>Closing</b>
                  </div>
                  <div class="text-center col" style="font-size: 10px">
                    <b>Round</b>
                  </div>
                </div>
                
                
                
                
                
                
                <div
                  class="shadow card border-secondary"
                  style="padding: 5px; width: 100%; cursor: pointer"
                >
                  <div class="align-items-center row" style="font-size: 11px">
                    <div class="text-center col-2">RIG-GN-03</div>
                    <div class="text-center col">Berazategui</div>
                    <div class="text-center col-1">50</div>
                    <div class="text-center col">1 Abr 00:00hs</div>
                    <div class="text-center col">
                      <svg
                        class="MuiSvgIcon-root text-danger"
                        focusable="false"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                        style="font-size: 14px"
                      >
                        <path
                          d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"
                        ></path>
                      </svg>
                      <span class="badge badge-danger badge">Round 2 </span>
                    </div>
                  </div>
                </div>
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
      <div class="modal-add">
        <div class="body">
          <div class="modal-close-btn">
            <img
              src="https://static.thenounproject.com/png/1014483-200.png"
              alt="close"
            />
          </div>
          <div class="header border-bottom">
            <p>Supply Point Name: <span>text</span></p>
            <p>
              Geographic Location of the Supply Point:
              <span>Province Location</span>
            </p>
          </div>
          <div class="d-flex flex-column">
            <div>
              <div class="form-group mt-4">
                <div class="row">
                  <div class="col-4">
                    <p>Purchase Request for:</p>
                  </div>
                  <div class="col-3">
                    <select class="select">
                      <option value="ELECTRICITY">ELECTRICITY</option>
                      <option value="NATURAL GAS">NATURAL GAS</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Deadline for receipt of Offers:</p>
                  </div>
                  <div class="col-3">
                    <input type="datetime-local" class="select" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-4">
                    <p>Date of publication of the Purchase Order:</p>
                  </div>
                  <div class="col-3">
                    <input type="datetime-local" class="select" />
                  </div>
                </div>
              </div>
              <span class="border-bottom"
                >If you have selected a NATURAL GAS Purchase order:</span
              >
              <div class="form-group mt-4">
                <div class="row">
                  <div class="col-4">
                    <p>Natural Gas Distributor POINT OF CONSUMPTION 1:</p>
                  </div>
                  <div class="col-3">
                    <select class="select">
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
              <div class="form-group mt-3">
                <div class="row">
                  <div class="col-4">
                    <p>Natural Gas Tariff POINT OF CONSUMPTION 1</p>
                  </div>
                  <div class="col-3">
                    <select class="select">
                      <option value="SGP3">SGP3</option>
                      <option value="SGG">SGG</option>
                      <option value="CNG">CNG</option>
                      <option value="GU">GU</option>
                    </select>
                  </div>
                </div>
              </div>
              <span class="border-bottom">If you have selected SGG or GU: </span>
              <div class="form-group mt-3">
                <div class="row">
                  <div class="col-4">
                    <p>
                      RESERVE (dam3/day) Consumption Curve POINT OF CONSUMPTION 1
                    </p>
                  </div>
                  <div class="col-3">
                    <select class="select">
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>
                </div>
              </div>
              <span class="border-bottom">Contract Conditions:</span>
              <div class="form-group mt-4">
                <div class="row">
                  <div class="col-4">
                    <p>Contract Term:</p>
                  </div>
                  <div class="col-3">
                    <input type="datetime-local" class="select" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Start of Supply:</p>
                  </div>
                  <div class="col-3">
                    <input type="date" class="select" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Total Quantity:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select py-2" />
                  </div>
                </div>
              </div>
              <span class="border-bottom">Cuenca Winter Mix:</span>
              <div class="form-group mt-3">
                <div class="row">
                  <div class="col-4">
                    <p>NQN:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select py-2" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>PTO:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select py-2" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>SCR:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select py-2" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>CHU:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select py-2" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>NOA:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select py-2" />
                  </div>
                </div>
              </div>
              <span class="border-bottom">Cuencas Summer Mix: </span>
              <div class="form-group mt-3">
                <div class="row">
                  <div class="col-4">
                    <p>NQN:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select py-2" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>PTO:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select py-2" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>SCR:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select py-2" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>CHU:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select py-2" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>NOA:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select py-2" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Type of Supply:</p>
                  </div>
                  <div class="col-3 d-flex">
                    <div class="pr-4">
                      <input
                        type="radio"
                        value="Firm"
                        id="Firm"
                        name="type_of_supply"
                      />
                      <label for="Firm">Firm</label>
                    </div>
                    <div>
                      <input
                        type="radio"
                        value="Spot"
                        id="Spot"
                        name="type_of_supply"
                      />
                      <label for="Spot">Spot</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Exclusivity:</p>
                  </div>
                  <div class="col-3">
                    <select class="select">
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Partial Award:</p>
                  </div>
                  <div class="col-3">
                    <select class="select">
                      <option value="YES">YES</option>
                      <option value="NO">NO</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Price:</p>
                  </div>
                  <div class="col-3">
                    <select class="select">
                      <option value="Flat">Flat</option>
                      <option value="Seasonal">Seasonal</option>
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
                    <select class="select">
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
                    <select class="select">
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
                    <input type="number" min="0" max="100" class="select" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2 border-bottom">
                <div class="row">
                  <div class="col-4">
                    <p>Take or Pay Price:</p>
                  </div>
                  <div class="col-3">
                    <input type="text" class="select" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Optional Delivery or Pay to the Seller:</p>
                  </div>
                  <div class="col-3">
                    <select class="select">
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
                    <input type="number" min="0" max="100" class="select" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2 border-bottom">
                <div class="row">
                  <div class="col-4">
                    <p>Delivery or Pay price:</p>
                  </div>
                  <div class="col-3">
                    <input type="text" class="select" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-4">
                <div class="row">
                  <div class="col-4">
                    <p>Payment term (5 to 180 days):</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Exchange Rate:</p>
                  </div>
                  <div class="col-3">
                    <select class="select">
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
                    <input type="number" class="select" />
                  </div>
                </div>
              </div>
              <div class="form-group mt-4">
                <div class="row">
                  <div class="col-4">
                    <p>Mortgage Rate Debts in Pesos:</p>
                  </div>
                  <div class="col-3">
                    <input type="number" class="select" />
                  </div>
                </div>
              </div>
  
              <div class="form-group mt-2">
                <div class="row">
                  <div class="col-4">
                    <p>Auction Commission:</p>
                  </div>
                  <div class="col-3">
                    <select class="select">
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
                    <input type="number" class="select" />
                  </div>
                </div>
              </div>
  
              <!-- Group -->
            </div>
            <button class="btn btn-primary border-0 px-6 py-2 rounded-lg">
              Add
            </button>
          </div>
        </div>
      </div>
    </body>
</html>
