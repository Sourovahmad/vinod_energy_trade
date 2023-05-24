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
        <table class="table">
          <thead>
            <tr>
              <th>Column A</th>
              <th>Column B</th>
              <th>Column C</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Data 2-A</td>
              <td>Data 2-B</td>
              <td>Data 2-C</td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>

      <!-- Tab 3 content -->
      <div class="tab-pane fade" id="content_3{{ $user->id }}" role="tabpanel" aria-labelledby="tab3">
        <table class="table">
          <thead>
            <tr>
              <th>Column X</th>
              <th>Column Y</th>
              <th>Column Z</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Data 3-X</td>
              <td>Data 3-Y</td>
              <td>Data 3-Z</td>
            </tr>
            <!-- Add more rows as needed -->
          </tbody>
        </table>
      </div>
    </div>
  </div>