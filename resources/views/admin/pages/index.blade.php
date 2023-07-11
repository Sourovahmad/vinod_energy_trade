@extends('admin.layout.app')

@section('content')





  @php
        $authUser = Auth::user();
    @endphp

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">


            <!-- Begin Page Content -->
            <div class="container-fluid  p-1">

                <div class="row">

                    <!-- Growth Card Example -->

                    <div class="col-xl-3 col-md-6 mb-4 text-center topCard">
                        <div class="card border-left-primary shadow  py-4">
                            <div class="card-img-top ">
                            <i class="fas fa-bell fa-2x text-info"></i>
                            </div>
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="{{ route('superadmin_orders') }}"> Todos los Pedidos de Compras   </a></div>
                                </div>

                            </div>
                            </div>
                        </div>
                 </div>



                   
                    <!-- Growth Card Example -->

                    <div class="col-xl-3 col-md-6 mb-4 text-center topCard">
                        <div class="card border-left-primary shadow  py-4">
                            <div class="card-img-top ">
                           <i class="fas fa-shopping-bag fa-2x text-info"></i>
                            </div>
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">   <a href="{{ route('all_sellers') }}"> Vendedores Registrados   </a></div>
                                </div>

                            </div>
                            </div>
                        </div>
                 </div>


                    <!-- Growth Card Example -->

                    <div class="col-xl-3 col-md-6 mb-4 text-center topCard">
                        <div class="card border-left-primary shadow  py-4">
                            <div class="card-img-top ">
                            <i class="fas fa-table fa-2x text-info"></i>
                            </div>
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">  <a href="{{ route('all_buyers') }}">  Compradores Registrados   </a></div>
                                </div>

                            </div>
                            </div>
                        </div>
                 </div>



                </div>



            </div>
        </div>
    </div>


@endsection


