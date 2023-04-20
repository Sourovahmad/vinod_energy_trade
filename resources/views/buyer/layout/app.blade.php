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
                  <a href="{{ route("user_home") }}" class="nav-link" role="button"
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
                    <a href="{{ route('user_home') }}" class="ml-auto nav-link" role="button">
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

              {{--  end of the nav --}}

              <div class="justify-content-md-center row">
                <div class="text-center col-12"></div>
              </div>

              <div class="container">
                <div class="text-center">

                    @yield('content')
                </div>
              </div>

              
              

    </body>

</html>