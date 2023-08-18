<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
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
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />


      <style type="text/css">

      .center{
        margin-left: 500px;
        width: 70%;
        text-align: center;
        padding: 30px;
      }
      table, th, td{
        border: 1px solid grey;
      }
      .th_deg{
        font-size: 20px;
        padding: 5px;
        background: skyblue;
      }
      .containerButton{
        margin-left: 600px
      }
      .img_deg{
        height: 100px;
        width: 150px;
        object-fit: cover;
      }
      .total_deg{
        font-size: 20px;
        padding: 30px;

      }

      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header');
         <!-- end header section -->

         <!-- end slider section -->

         @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                {{session()->get('message')}}
            </div>
         @endif


      <div class="center">
        <table>
            <tr>
                <th class="th_deg">Product Title</th>
                <th class="th_deg">Product Quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>
            </tr>
            <?php $totalprice=0; ?>
            @foreach ($cart as $cart)


            <tr>
                <td> {{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</th>
                <td>${{$cart->price}}</td>
                <td> <img class="img_deg" src="/product/{{$cart->image}}" alt=""> </td>
                <td> <a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product?')"  href="{{url('/remove_cart',$cart->id)}}"> Remove Product </a></td>
            </tr>

            <?php $totalprice=$totalprice + $cart->price ?>
            @endforeach
        </table>
    </div>
    <div class="containerButton">
        <div class="">
            <h1 class="total_deg">Total price : ${{$totalprice}}</h1>
        </div>

        <div class="">
          <h1 style="font-size: 20px; padding-bottom: 20px"> Proceed to Order</h1>
          <a href="{{url('cash_order')}}" class="btn btn-danger"> Cash On Delivery</a>
          <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger"> Pay With Card</a>
        </div>
    </div>





      <!-- footer start -->
      @include('home.footer');
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">Rentsng.com</a><br>



         </p>
      </div>
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
