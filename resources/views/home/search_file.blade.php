<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Rentsng - Rentsng.com</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />

      <link href="home/css/search.css" rel="stylesheet" />
      <link href="home/css/searchListingPage.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header');
         <!-- end header section -->

         @include('home.search')










     <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">HOTELS IN </h2>

        <div class="h-line bg-dark"></div>

      </div>
<section class="sidebarListing">

<div class="container-sm listing-container">
 <div class="row">



    <div class="col-lg-4" style="background-color: #00BFFF">
        <div class="card" >
            <div class="row">
                <div class="container">
                    <div class="col-lg-8">
                        <h4 class="header-text">Venue Types</h4>

                           <label>
                            <input type="checkbox" class="option-input checkbox" checked>
                            Auditorium
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Boardroom
                           </label>
                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Civic Center
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Club Hall
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Conference Center
                           </label>


                    </div>

                    <div class="col-lg-8">
                        <h4 class="header-text">Event Types</h4>

                           <label>
                            <input type="checkbox" class="option-input checkbox" checked>
                            Meeting Rooms
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Wedding Halls
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Halls for Birthday
                           </label>

                         


                    </div>

                    <div class="col-lg-8">
                        <h4 class="header-text">Expected Guest</h4>

                           <label>
                            <input type="checkbox" class="option-input checkbox" checked>
                            Less than 100
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            100 - 200 Guests
                           </label>
                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            200 - 400 Guests
                           </label>
                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            400 - 600 Guests
                           </label>
                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            600 - 1,000 Guests
                           </label>

                           

                           

                    </div>

                    <div class="col-lg-8">
                        <h4 class="header-text">Halls with this Facilities </h4>

                           <label>
                            <input type="checkbox" class="option-input checkbox" checked>
                            Internet
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Power supply
                           </label>

                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Lighting
                           </label>
                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Sound System
                           </label>
                           <label>
                            <input type="checkbox" class="option-input checkbox"
                            >
                            Projector
                           </label>

                          


                    </div>
                </div>

            </div>





        </div>
  </div>



      <div class="col-lg-8  px-2" >
        @foreach ($data as $product)
        <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center" >
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="product/{{$product->images[0]->image}}" style="height:300px; width:100% !important; object-fit:cover" alt="">
            </div>
          <div class="col-md-5 px-lg-3 px-md-3 px-0">
            <h5 class="mb-3"> {{$product->title}} </h5>
            <div class="features mb-4">
                  <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Balcony
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    3 Sofa
                  </span>
                </div>
                <div class="Facilities mb-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Parking space
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Water Heater
                  </span>
                </div>
                <div class="guests">
                  <h6 class="mb-1">Occupants</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Tenants Only
                  </span>
                 
                  
                </div>
          </div>
          <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
            <h6 class="mb-4">₦{{ number_format($product->price, 2) }}  </h6>
            <a href="{{url('/property',$product->id)}}" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
          </div>
        </div>


        </div>


        @endforeach
        <div class="d-flex justify-content-center">
            {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
       </div>

        </div>
      </div>



</div>

</section>




      <!-- footer start -->
      @include('home.footer')

      <div class="cpy_">
        <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">Teerka.com</a><br>
        </p>
     </div>
      <!-- footer end -->

      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
