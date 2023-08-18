<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
            Virgin <span> Properties</span>
          </h2>
       </div>
       <div class="row">


        <section class="room top" id="room">
            <div class="container">
              <div class="heading_top flex1">
                <div class="heading">
                  <h5>RAISING COMFORT TO THE HIGHEST LEVEL</h5>
                  <h2>Selfcon $ Flat</h2>
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

                     ${{$product->discount_price}}
                     </h6>

                            <p> <span>$</span> <span style="text-decoration: line-through; color:blue"> {{$product->price}}</span> <span>/per night</span> </p>


                         @else
                         <h6 style="color:dimgray">
                             ${{$product->price}}
                             </h6>

                    @endif

                    <a href="{{url('property',$product->id)}}" class="option1 btn btn-secondary">
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
