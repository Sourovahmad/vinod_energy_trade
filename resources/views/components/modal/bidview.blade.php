<div class="modal-content">
    <div class="modal-header">


      <h5 class="modal-title" id="exampleModalLabel">Bid Informations  </h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="shadow text-center card border-secondary">


@forelse ($bids as  $currentBid)

<div class="row">
    <div class="col"></div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">


          <div class="row">
            <div class="col h4">Offerd by :   {{ $currentBid->user->social_name }} </div>
           
          </div>
        </div>
        <form method="post" action="{{ route('submit_bid') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-2">
            <br />
            <div class="row">

              {{-- <input type="text" name="order_id" value="{{ $openOrder->id }}" required hidden> --}}


              @if($currentBid != null)

              <input type="text" name="status" value="update" required hidden>

              @else

                  <input type="text" name="status" value="create" required hidden>


              @endif

              <div class="col">
                <label class="form-label">Price January </label>
              </div>
              <div class="col">
                <input
                  type="number"
                  placeholder="USD/dam3"
                  class="form-control"
                  name="price_january"
                  value="{{ $currentBid ? $currentBid->price_january : '' }}"
                  disabled
                />
              </div>
              <div class="col-xl-1"></div>
            </div>


          </div>


          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label"> Price February</label>
              </div>
              <div class="col">
                <input
                type="number"
                  placeholder="USD/dam3"
                  class="form-control"
                  name="price_february"
                  value="{{ $currentBid ? $currentBid->price_february : '' }}"
                  disabled
                />
              </div>
              <div class="col-xl-1"></div>
            </div>

          </div>



          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label">Price March</label>
              </div>
              <div class="col">
                <input type="number" placeholder="USD/dam3" class="form-control" name="price_march"             
                    value="{{ $currentBid ? $currentBid->price_march : '' }}" disabled />
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>


          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label">Price April</label>
              </div>
              <div class="col">
                <input type="number" placeholder="USD/dam3" class="form-control" name="price_april" 
                value="{{ $currentBid ? $currentBid->price_april : '' }}"
                disabled
                />
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>

          
          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label">Price May</label>
              </div>
              <div class="col">
                <input type="number" placeholder="USD/dam3" class="form-control" name="price_may"
                value="{{ $currentBid ? $currentBid->price_may : '' }}"
                disabled
                />
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>
          

          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label type="number" class="form-label">Price June</label>
              </div>
              <div class="col">
                <input placeholder="USD/dam3" class="form-control" name="price_june"
                value="{{ $currentBid ? $currentBid->price_june : '' }}"
                disabled
                
                />
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>
          
          

          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label">Price July</label>
              </div>
              <div class="col">
                <input type="number" placeholder="USD/dam3" class="form-control" name="price_july"
                value="{{ $currentBid ? $currentBid->price_july : '' }}"
                disabled
                
                />
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>



          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label">Price August</label>
              </div>
              <div class="col">
                <input type="number" placeholder="USD/dam3" class="form-control" name="price_august"
                value="{{ $currentBid ? $currentBid->price_august : '' }}"

                disabled
                
                />
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>

          

          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label">Price September</label>
              </div>
              <div class="col">
                <input  type="number" placeholder="USD/dam3" class="form-control" name="price_september"
                value="{{ $currentBid ? $currentBid->price_september : '' }}"

                disabled
                
                
                />
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>
          

          
          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label">Price October</label>
              </div>
              <div class="col">
                <input type="number" placeholder="USD/dam3" class="form-control" name="price_october" 
                value="{{ $currentBid ? $currentBid->price_october : '' }}"

                disabled
                
                
                />
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>



          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label">Price November</label>
              </div>
              <div class="col">
                <input type="number" placeholder="USD/dam3" class="form-control" name="price_november"
                value="{{ $currentBid ? $currentBid->price_november : '' }}"

                disabled
                
                />
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>



          
          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label">Price December</label>
              </div>
              <div class="col">
                <input type="number" placeholder="USD/dam3" class="form-control" name="price_december"
                value="{{ $currentBid ? $currentBid->price_december : '' }}"

                disabled
                />
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>





          
          @if(!is_null($currentBid->take_or_pay_optional_to_seller))


          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label">Optinal Take or pay to the seller (0%-100%)</label>
              </div>
              <div class="col">
                <input type="number" placeholder="0%-100%" class="form-control" name="optional_take_or_pay_to_seller" min="0" max="100"
                
                value="{{ $currentBid ? $currentBid->optional_take_or_pay_to_seller : '' }}"
                
                
                disabled/>
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>
            
          @endif


          



          @if(!is_null($currentBid->optional_delivery_to_seller))


          <div class="form-group mb-3">
            <div class="row">
              <div class="col">
                <label class="form-label">Optinal delivery or pay to the seller (0%-100%)</label>
              </div>
              <div class="col">
                <input type="number" placeholder="0%-100%" class="form-control" name="optional_delivery_or_pay_to_seller" min="0" max="100"
                value="{{ $currentBid ? $currentBid->optional_delivery_or_pay_to_seller : '' }}"

                
                disabled/>
              </div>
              <div class="col-xl-1"></div>
            </div>
          </div>
            
          @endif

          
          


          <hr>

          <br>
          
        </form>




     
      </div>
    </div>
  </div>

    
@empty


<div class="row">
    <div class="col"></div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">


          <div class="row">
            <div class="col h4">No Bid Available</div>
          
          </div>
        </div>
    </div>
</div>
</div>
    
@endforelse


       

        
        
      </div>
    </div>
    
  </div>

