@extends('admin.layout.app')

@section('content')


@include('components.additional.adminError')


    <div class="card shadow mb-4">

        <div class="card-header py-3 bg-techbot-dark">
            <nav class="navbar">

                <div class="navbar-brand">  {{ $user_type == 'Buyers' ? "Buyers" : "Sellers" }}  </div>
               
            </nav>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-techbot-dark">

                        <tr>

                            <th> #</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tfoot class="bg-techbot-dark">
                        <tr>

                            <th> #</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>

                        </tr>

                    </tfoot>

                    <tbody>


                        @foreach ($users as $user)
                            <tr class="data-row">

                                <td>{{ $loop->iteration }}</td>

                                <td class="word-break name">{{ $user->first_name }}  {{ $user->last_name }}</td>
                                <td class="word-break email">{{ $user->email }} </td>
                                <td class="word-break phone">{{ $user->phone }}  </td>

                                <td class="align-middle">

                                    <button title="Edit" type="button" class="dataEditItemClass btn btn-success btn-sm"
                                        id="data-edit-button" data-item-id={{ $user->id }}> <i class="fa fa-edit"
                                            aria-hidden="false">
                                        </i></button>


                                    <form method="POST" action="{{ route('admin_user_destroy', $user->id) }}"
                                        id="delete-form-{{ $user->id }}" style="display:none; ">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                    </form>



                                    <button title="Delete" class="dataDeleteItemClass btn btn-danger btn-sm" onclick="if(confirm('Are you sure Want To Delete ?')){
            document.getElementById('delete-form-{{ $user->id }}').submit();
           }
           else{
            event.preventDefault();
           }
           " class="btn btn-danger btn-sm btn-raised">
                                        <i class="fa fa-trash" aria-hidden="false">

                                        </i>
                                    </button>




                                    {{-- user information mdoal --}}

                                        <button title="Edit" type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#information_view_modal_{{ $user->id }}" data-item-id={{ $user->id }}> <i class="fas fa-eye"
                                            aria-hidden="false">
                                        </i></button>


                                        <div class="modal fade" id="information_view_modal_{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">User Informations</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              {{--  modal body start here --}}

                                              @include('components.admin.userInfo',[
                                                'user' => $user,
                                              ])
                                  
                                              {{-- modal body end here --}}
                                            </div>
                                          </div>
                                        </div>



                                </td>


                            </tr>

                        @endforeach

                    </tbody>


                </table>
            </div>
        </div>
    </div>




    <!-- Attachment Modal -->
    <div class="modal fade" id="data-edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-techbot-dark">
                    <h5 class="modal-title " id="edit-modal-label ">
                        Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="attachment-body-content">
                    <form id="data-edit-form" class="form-horizontal" method="POST" action="{{route('admin_update_user')}}">
                        @csrf
                  
                        <div class="form-group">
                            <label class="col-form-label" for="modal-update-hidden-id">Id</label>
                            <input type="text" name="user_id" class="form-control" id="modal-update-hidden-id" required readonly>
                        </div>


                        <div class="form-group">
                            <label class="col-form-label" for="modal-update-first_name">First Name <span style="color: red">*</span></label>
                            <input type="text" name="first_name" id="modal-update-first_name" class="form-control" required>

                        </div>


                        <div class="form-group">
                            <label class="col-form-label" for="modal-update-last_name">Last Name <span style="color: red">*</span></label>
                            <input type="text" name="last_name" id="modal-update-last_name" class="form-control" required>

                        </div>



                        <div class="form-group">
                            <label class="col-form-label" for="modal-update-phone">Phone<span style="color: red">*</span></label>
                            <input type="text" name="phone" id="modal-update-phone" class="form-control" required>

                        </div>






                        <div class="form-group">

                            <input type="submit" id="submit-button" value="Submit" class="form-control btn btn-success">
                        </div>




                    </form>
                </div>

            </div>
        </div>
    </div>



    <script>


        $(document).ready(function () {

            var users = @json($users);

            $('#dataTable').DataTable({
                dom: 'lBfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });



            $(document).on('click', "#data-edit-button", function () {

                $(this).addClass(
                'edit-item-trigger-clicked');
                var options = {
                    'backdrop': 'static'
                };
                $('#data-edit-modal').modal(options)
            });


            // on modal show
            $('#data-edit-modal').on('show.bs.modal', function () {

                var el = $(".edit-item-trigger-clicked");

                // get the data
                var itemId = el.data('item-id');

                $.each(users, function (key) {

                    if(users[key].id == itemId){


                        $("#modal-update-hidden-id").val(users[key].id);
                        $("#modal-update-first_name").val(users[key].first_name);
                        $("#modal-update-last_name").val(users[key].last_name);
                        $("#modal-update-phone").val(users[key].phone);
                    }

                 });

            });



            // on modal hide
            $('#data-edit-modal').on('hide.bs.modal', function () {
                $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
                $("#edit-form").trigger("reset");
            });
        });

    </script>







@endsection