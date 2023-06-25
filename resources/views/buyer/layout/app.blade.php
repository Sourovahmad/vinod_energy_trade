<html lang="es">
    <head>
        <title>ARGOS ENERGIA</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/buyer_main_css.css') }}" />
        <script src="{{ asset('js/buyerConfig.js') }}" defer></script>
    </head>
    <body>

        <div id="root">
               



              @include('components.additional.navbar')
              



              {{--  end of the nav --}}

              <div class="justify-content-md-center row">
                <div class="text-center col-12"></div>
              </div>

              <div class="container">
                <div class="text-center">

                    @yield('content')
                </div>
              </div>

              
            <script src="{{ asset('js/bootstrapBundle.js') }}"></script>

    </body>

</html>