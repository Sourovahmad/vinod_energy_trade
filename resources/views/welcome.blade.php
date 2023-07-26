<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARGOS ENERGIA</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
  <style>
    body {
      background-image: linear-gradient(135deg, #6C63FF, #0b6c8c, #FF7373);
    }
  </style>
</head>

<body>
  <nav class="flex items-center justify-between p-4 bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500">
    <div>
      <a  class="text-xl font-bold text-white"><img src="{{ asset('logo/logo.jpeg') }}" alt="argos_energia" style="width: 5%; border-radius:50%"></a>
    </div>
    <div>

        @guest
     
        <a href="{{ route('login') }}" class="mx-2 text-white font-bold">Login</a>
        <a href="{{ route('register') }}" class="mx-2 text-white font-bold">Register</a>

        @endguest

    </div>
  </nav>




  @if(session('success'))
  <script>
    Swal.fire({
      icon: 'success',
      title: '{{ session('success') }}',
      showConfirmButton: true,
      confirmButtonText:'ok',
      timer: 3000,
      showCloseButton: true,
    });
  </script>
@endif

@if($errors->any())
  <script>
    Swal.fire({
      icon: 'error',
      title: 'There were some errors',
      html: `
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      `,
      showConfirmButton: true,
      timer: 7000,
      showCloseButton: true,
      confirmButtonText:'ok',
    });
  </script>
@endif


  <div class="flex flex-col items-center justify-center h-screen">
    <h1 class="text-4xl font-bold mb-8 text-white">Bienvenida</h1>
    <h4 class="text-white">You are a ?</h4>
    <div class="flex">
        <a href="{{ route('buyer_index') }}"><button  class="px-8 py-4 mx-2 bg-blue-500 text-white font-bold rounded-full">Compradora</button> </a>
        <a href="{{ route('seller_index') }}"><button class="px-8 py-4 mx-2 bg-green-500 text-white font-bold rounded-full">Vendedora</button>  </a>
      
    </div>
  </div>


 
</body>

</html>
