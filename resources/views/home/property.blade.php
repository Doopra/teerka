<!DOCTYPE html>
<html>
    <base href="/public">
   @include('home.style')
   @include('home.carouselStyle')
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header');
         <!-- end header section -->



         <!-- slider section -->
         @include('home.carousel');
         <!-- end slider section -->




      </div>
      <!-- why section -->
    @include('home.tabSection')


</div>






<!------------------------------------------------------>

@include('home.bookingForm')



@include('home.similarApartment')


      <!-- footer start -->
      @include('home.footer');


      <!-- footer end -->

      @include('home.script')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


   </body>
</html>
