<!-- Sidebar -->
<ul class="navbar-nav    sidebar sidebar-dark accordion bg-techbot-dark " id="accordionSidebar">

    <!-- Divider -->
    @php
        $auth = Auth::user();
    @endphp



    <!-- Nav Item - Dashboard -->
    <li class="nav-item active ">
        <a class="nav-link p-3 " href="{{ route('superadmin_index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Super Admin Panel</span></a>
    </li>


    {{-- *********************************Super Admin********************************** --}}





    <hr class="sidebar-divider m-1 p-0 ">
    <hr class=" m-1 p-0 ">
    <hr class=" m-1 p-0 ">
    <hr class=" m-1 p-0 ">

   
 
        <hr class="sidebar-divider m-1 p-0 ">


    <!-- Product Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            <span>{{__('Users')}}</span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">


                <a class="collapse-item" href="{{ route("all_buyers") }}"> Buyer  </a>
                <a class="collapse-item" href="{{ route("all_sellers") }}"> Seller  </a>


            </div>
        </div>
    </li>


     
    <hr class="sidebar-divider m-1 p-0 ">


    <!-- Product Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseOrders" aria-expanded="true" aria-controls="collapseOrders">
            <i class="fas fa-bell"></i>
            <span>{{__('Orders')}}</span>
        </a>
        <div id="collapseOrders" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">


                <a class="collapse-item" href="{{ route("orders_which_need_review") }}"> Need Review  </a>


            </div>
        </div>
    </li>



   
  


   
   

    {{-- *********************************Waiter********************************** --}}


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center  d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle">   </button>

    </div>



</ul>
<!-- End of Sidebar -->
