<section class="why_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Popular Cities
          </h2>
       </div>
       <div class="row ">


        @foreach ($cities as $city )

            @php
            $url = "/hotels/".strtolower($city->city);

            @endphp
            <a href="{{$url}}" class="col-md-3 " style="text-decoration:none">

            <div class="box ">

                <div class="img-box">

                </div>
                <div class="detail-box">
                   <h5>
                      {{$city->city}}
                   </h5>
                   <p>
                    {{$city->count}} properties in {{ $city->city }}
                   </p>
                </div>

            </div>
            </a>

            @endforeach




         </div>

       </div>
    </div>
 </section>
