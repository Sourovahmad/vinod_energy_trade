

@forelse($bids as $currentBid)

<div class="modal-content">
    <div class="modal-header">


      <h5 class="modal-title" id="exampleModalLabel">Bid For: {{ $currentBid->order->supply_point_name }}  </h5>
     
    </div>
    <div class="modal-body">
      <div class="shadow text-center card border-secondary">





        <div class="row">
          <div class="col"></div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">


                <div class="row">
                  <div class="col h4">Bid Information</div>
                  
                </div>
              </div>
      
                @csrf
                <div class="form-group mb-2">
                  <br />
                  <div class="row">


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
                        required
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
                        required
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
                          value="{{ $currentBid ? $currentBid->price_march : '' }}" required />
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
                      required
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
                      required
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
                      required
                      
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
                      required
                      
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

                      required
                      
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

                      required
                      
                      
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

                      required
                      
                      
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

                      required
                      
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

                      required
                      />
                    </div>
                    <div class="col-xl-1"></div>
                  </div>
                </div>






                @if(!is_null($currentBid->optional_take_or_pay_to_seller))


                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col">
                      <label class="form-label">Optinal Take or pay to the seller (0%-100%)</label>
                    </div>
                    <div class="col">
                      <input type="number" placeholder="0%-100%" class="form-control" name="optional_take_or_pay_to_seller" min="0" max="100"
                      
                      value="{{ $currentBid ? $currentBid->optional_take_or_pay_to_seller : '' }}"
                      
                      
                      required/>
                    </div>
                    <div class="col-xl-1"></div>
                  </div>
                </div>
                  
                @endif


                



                @if(!is_null($currentBid->optional_delivery_or_pay_to_seller))


                <div class="form-group mb-3">
                  <div class="row">
                    <div class="col">
                      <label class="form-label">Optinal delivery or pay to the seller (0%-100%)</label>
                    </div>
                    <div class="col">
                      <input type="number" placeholder="0%-100%" class="form-control" name="optional_delivery_or_pay_to_seller" min="0" max="100"
                      value="{{ $currentBid ? $currentBid->optional_delivery_or_pay_to_seller : '' }}"

                      
                      required/>
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


        
      </div>
    </div>
    
  </div>


  
@empty

<div class="text-center mt-4">
  <h4>No bids available </h4>
</div>


@endforelse