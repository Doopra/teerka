<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
            Our Top <span> Deals</span>
          </h2> 
       </div>
       <div class="row">


        <section class="room top" id="room">
            <div class="container">
              <div class="heading_top flex1">
                <div class="heading">
                  <h5>Discover exclusive hall deals, only available today</h5>
                  <h6>For your wedding, corporate gathering, or birthday bash, we have the ideal venue for your unique event.</h6>
                </div>

              </div>










              <div class="content grid">
                @foreach ($products as $product)
                <div class="box-container">
                  <div class="img">


                    <img src="product/{{$product->images[0]->image}}" alt="">
                  </div>
                  <div class="text">
                    <h3 style="font-size: 14px; font-weight:bold"> {{$product->title}}</h3>

                    @if ($product->discount_price!=null)

                    <h6 style="color: red">

                     ₦{{ number_format($product->discount_price, 2) }}
                     </h6>

                            <p> <span style="text-decoration: line-through; color: #00BFFF"> ₦{{ number_format($product->price, 2) }}</span> <span>/ per night</span> </p>


                         @else
                         <h6 style="color:dimgray">
                          ₦{{ number_format($product->price, 2) }}
                             </h6>

                    @endif

                    <a href="{{url('property',$product->id)}}" class="option1 btn btn-secondary" style="background-color:  #00BFFF; border-color:  #00BFFF">
                        Book Now
                        </a>

                  </div>
                </div>

          @endforeach


              </div>

            </div>

          </section>







       </div>

    </div>
 </section>
