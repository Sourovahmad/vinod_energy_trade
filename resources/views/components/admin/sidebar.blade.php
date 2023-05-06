<!-- Sidebar -->
<ul class="navbar-nav    sidebar sidebar-dark accordion bg-techbot-dark " id="accordionSidebar">

    <!-- Divider -->
    @php
        $auth = Auth::user();
    @endphp



    <!-- Nav Item - Dashboard -->
    <li class="nav-item active ">
        <a class="nav-link p-3 " href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Home') }}</span></a>
    </li>


    {{-- *********************************Super Admin********************************** --}}





    <hr class="sidebar-divider m-1 p-0 ">

    <li class="nav-item active ">
        <a class="nav-link p-3 " href="">
            <i class="fas fa-bell"></i>
            <span>{{ __('Orders') }}</span></a>
    </li>


 
        <hr class="sidebar-divider m-1 p-0 ">


    <!-- Product Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
            <i class="fas fa-shopping-bag"></i>
            <span>{{__('Product')}}</span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">


                <a class="collapse-item" href=""> Itm </a>


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
