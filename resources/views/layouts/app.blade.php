<html lang="es">
    <head>
        <title>CONECTO ENERGIA</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/buyer_main_css.css') }}" />
 
        <script src="{{ asset('js/buyerConfig.js') }}" defer></script>
    </head>
    <body>

        <div id="root">
             
         {{-- navbar will be here --}}

         @include('components.additional.navbar')

         {{-- end of navbar --}}  

            @yield('content')

              
            <script src="{{ asset('js/bootstrapBundle.js') }}"></script>

    </body>

</html>