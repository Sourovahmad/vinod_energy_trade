@extends('admin.layout.app')

@section('content')


@include('components.additional.adminError')

<link rel="stylesheet" href="{{ asset('css/buyer_main_css.css') }}" />
<script src="{{ asset('js/buyerConfig.js') }}" defer></script>


   
    <div class="card shadow mb-4">

        <div class="card-header py-3 bg-techbot-dark">
            <nav class="navbar">

                <div class="navbar-brand"> Bid Review  </div>
              

            </nav>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-techbot-dark">

                        <tr>

                            <th> #</th>
                            <th>Order Code</th>
                            <th>Buyer</th>
                            <th>Seller</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot class="bg-techbot-dark">
                        <tr>

                            <th> #</th>
                            <th>Order Code</th>
                            <th>Buyer</th>
                            <th>Seller</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>


                        @foreach ($orders as $order)
                            <tr class="data-row">

                                <td>{{ $order->id }}</td>

                                <td class="word-break">{{ $order->order->code }} </td>
                                <td class="word-break">{{ $order->order->user->social_name }} </td>
                                <td class="word-break">{{ $order->user->social_name }} </td>
                               
                                <td class="align-middle">

                                    <button title="Edit" type="button" data-toggle="modal" data-target="#modal_view{{ $order->id }}" class="dataEditItemClass btn btn-success btn-sm"> <i class="fas fa-eye"></i> </button>



                                    {{-- bid view modal start here --}}


                                    @php
                                        $openOrder = $order->order;
                                        $currentBid = $order;
                                    @endphp



                                    <div class="modal fade" id="modal_view{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">

                                            @include('components.modal.bidcontent',[
                                                'openOrder' => $openOrder,
                                                'currentBid' => $currentBid
                                            ]);
                                          
                                        </div>
                                      </div>





                                    {{-- bid view modal end here here --}}

                                 </td>


                            </tr>

                        @endforeach

                    </tbody>


                </table>
            </div>
        </div>
    </div>





    <script>


        $(document).ready(function () {

            $('#dataTable').DataTable({
                dom: 'lBfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            
        });

    </script>







@endsection