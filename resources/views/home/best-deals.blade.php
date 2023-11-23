<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
            Best <span> Deals</span>
          </h2>
       </div>  
       <div class="row">


        <section class="room top" id="room">
            <div class="container">
              <div class="heading_top flex1">
                <div class="heading">
                  <h5>TODAY'S BEST HALL DEALS</h5>
                  <h2>Tailored for Every Occasion</h2>
                </div>

              </div>


               <div class="content grid">
                @foreach ($property as $product)
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

                            <p>  <span style="text-decoration: line-through; color: #00BFFF"> ₦{{ number_format($product->price, 2) }}</span> <span> / per day</span> </p>


                         @else
                         <h6 style="color:dimgray">
                          ₦{{ number_format($product->price, 2) }}
                             </h6>

                    @endif

                    <a href="{{ url("/event/{$product->id}-".Str::slug($product->title)) }}" class="option1 btn btn-secondary" style="background-color:  #00BFFF; border-color:  #00BFFF">
                        Book Now
                        </a>

                  </div>
                </div>

          @endforeach


              </div>

            </div>

          </section>






          <span style="padding-top: 50px">



        </span>
       </div>

    </div>
 </section>
