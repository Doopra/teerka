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
  <style>
    .center{
        margin: auto;
        width: 70%;
        text-align: center;
        padding: 30px;
    }
    table, th, td{
        border:  1px solid black;
    }
    th{
        padding: 10px;
        background-color: skyblue;
        font-size: 20px;
        font-weight: bold;
    }
  </style>

    </head>
   <body>

         <!-- header section strats -->
         @include('home.header');
         <!-- end header section -->

         <div class="center">
            <table>
                <tr>
                    <th>Product Title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Cancel Order</th>
                </tr>

                @foreach ($order as $order)



                <tr>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img style="object-fit: cover" height="100" width="180" src="product/{{$order->image}}" alt="">
                    </td>
                    <td>
                        @if ($order->delivery_status=='processing')


                        <a onclick="return confirm('Are you sure to cancel this order?')" class="btn btn-danger" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>
                        @else
                        <p class="btn btn-info">Not Allowed</p>
                        @endif
                    </td>
                </tr>

                @endforeach
            </table>
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
