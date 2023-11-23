<!DOCTYPE html>
<html>
   @include('home.style')
   <body >
      <div class="hero_area" >
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->

         <!-- slider section -->
         @include('home.slider')
         <!-- end slider section -->

         @include('home.search')
      </div>
      <!-- why section -->
      @include('home.popular-cities')
      <!-- end why section -->

      @include('home.best-deals')

      <!-- arrival section -->
      @include('home.list-property')
      <!-- end arrival section -->

      <!-- product section -->
      @include('home.top-deals')
      <!-- end product section -->

      <!-- subscribe section -->
      @include('home.subcribe')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('home.client')
      
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">Teerka.com</a><br>
         </p>
      </div>
      <!-- jQery -->
     @include('home.script')
   </body>
</html>
