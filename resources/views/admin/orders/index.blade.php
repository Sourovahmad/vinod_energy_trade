@extends('admin.layout.app')

@section('content')


@include('components.additional.adminError')

<link rel="stylesheet" href="{{ asset('css/buyer_main_css.css') }}" />
<script src="{{ asset('js/buyerConfig.js') }}" defer></script>


   
    <div class="card shadow mb-4">

        <div class="card-header py-3 bg-techbot-dark">
            <nav class="navbar">

                <div class="navbar-brand">{{ $page_title }} </div>
              

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
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot class="bg-techbot-dark">
                        <tr>

                            <th> #</th>
                            <th>Order Code</th>
                            <th>Buyer</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>


                        @foreach ($orders as $order)
                            <tr class="data-row">

                                <td>{{ $order->id }}</td>

                                <td class="word-break">{{ $order->code }} </td>
                                <td class="word-break">{{ $order->user->social_name }} </td>
                               
                                <td class="align-middle">

                                    <button title="Edit" type="button" data-toggle="modal" data-target="#modal_view{{ $order->id }}" class="dataEditItemClass btn btn-success btn-sm"> view & Bids 
                                    
                                    </button>




                                    
                                    <button title="Edit" type="button" class="btn btn-info btn-sm">
                                        
                                        <a class="text-white" href="{{ route('superadmin_orders_edit', $order->id) }}">Edit</a>
                                         
                        
                                    </button>



                                    <button title="Edit" type="button" data-toggle="modal" data-target="#modal_status{{ $order->id }}" class="btn btn-primary btn-sm"> Change status 
                                    
                                    </button>


                               
                                    <form method="POST" action="{{ route('superadmin_delete_order', $order->id) }}"
                                        id="delete-form-{{ $order->id }}" style="display:none; ">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                    </form>



                                    <button title="Delete" class="dataDeleteItemClass btn btn-danger btn-sm" onclick="if(confirm('Are you sure Want To Delete ?')){
            document.getElementById('delete-form-{{ $order->id }}').submit();
           }
           else{
            event.preventDefault();
           }
           " class="btn btn-danger btn-sm btn-raised">
                                        <i class="fa fa-trash" aria-hidden="false">

                                        </i>
                                    </button>



                                    {{-- bid view modal start here --}}


                                    @php
                                        $openOrder = $order;
                                        $bids = $order->bids;
                                    @endphp


                                    <div class="modal fade" id="modal_view{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">

                                            @include('components.modal.bidcontent',[
                                                'openOrder' => $openOrder,
                                                'bids' => $bids
                                            ]);
                                          
                                        </div>
                                      </div>

                                    {{-- bid view modal end here here --}}



                                    {{-- order edit modal start here --}}

                                    <div class="modal fade" id="modal_status{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">change status {{ $order->supply_point_name }}</h5>

                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                      
                                            <form action="{{ route('superadmin_update_order_status') }}" method="POST" >
                                              @csrf
                                            
                                            <input type="text" name="order_hidden_id" id="" value="{{ $order->id  }}" required hidden>
                                         
                                            <div class="modal-body">
                                              
                      
                                              <div class="form-group mt-3">
                                                 <label for="status_change_select"> Status</label>
                                               
                                                    <select class="select form-control" name="status" required id="status_change_select">

                                                        @php
                                                            $currentStatus = $order->status;
                                                        @endphp
                      
                                                      <option value="open" {{ $currentStatus == 'open' ? 'selected' : '' }}  >Open</option>
                                                      <option value="awarded" {{ $currentStatus == 'awarded' ? 'selected' : '' }}  >Awarded</option>
                                                      <option value="under_analysis" {{ $currentStatus == 'under_analysis' ? 'selected' : '' }}  >Under Analysis</option>
                                                      <option value="desert"  {{ $currentStatus == 'desert' ? 'selected' : '' }}  >Desert</option>


                                                    </select>
                                              </div>
                                    
                      
                      
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                      
                                          </form>
                                          </div>
                                        </div>
                                      </div>



                                    {{-- order edit modal end here --}}

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