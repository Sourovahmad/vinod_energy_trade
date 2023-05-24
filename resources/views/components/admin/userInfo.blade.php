

<link rel="stylesheet" href="{{ asset('css/buyer_main_css.css') }}" />
<script src="{{ asset('js/buyerConfig.js') }}" defer></script>



<div class="modal-body">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="tab1" data-toggle="tab" href="#content_1{{ $user->id }}" role="tab" aria-controls="content1" aria-selected="true">Additional Info</a>
      </li>

      @if($user->user_type == 'buyer')

      <li class="nav-item">
        <a class="nav-link" id="tab2" data-toggle="tab" href="#content_2{{ $user->id }}" role="tab" aria-controls="content2" aria-selected="false">Purchase Reqeust</a>
      </li>

      @else

      <li class="nav-item">
        <a class="nav-link" id="tab3" data-toggle="tab" href="#content_3{{ $user->id }}" role="tab" aria-controls="content3" aria-selected="false">Offers</a>
      </li>

        
      @endif


   

    </ul>

    <!-- Tab content -->
    <div class="tab-content">
      <!-- Tab 1 content -->
      <div class="tab-pane fade show active" id="content_1{{ $user->id }}" role="tabpanel" aria-labelledby="tab1">

        @include('components.admin.userInfoSingle.userInfoSingle_additional')


      </div>

      <!-- Tab 2 content -->
      <div class="tab-pane fade" id="content_2{{ $user->id }}" role="tabpanel" aria-labelledby="tab2">
        @include('components.admin.userInfoSingle.buyer_purchase',[
          'purchase_requests' => $user->buyerOrders
        ])
      </div>

      <!-- Tab 3 content -->
      <div class="tab-pane fade" id="content_3{{ $user->id }}" role="tabpanel" aria-labelledby="tab3">
       @include('components.admin.userInfoSingle.sellerBids',[
        "bids" => $user->sellerOffers
       ])
        
      </div>
    </div>
  </div>