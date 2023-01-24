<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     @include('admin.css');

     <style>
        .title_deg{
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 50px;

        }
        .table_deg{
            border: 2px solid white;
            width: 70%;
            margin: auto;
            text-align: center
        }
        th{
            padding: 20px;
            background-color: skyblue;
        }
        td{
            inline-size: 1.0;
            overflow-wrap: break-word;
        }
        .img_size{
            width: 200px;
            height: 100px;
            object-fit: contain
        }

     </style>
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_deg"> All Orders</h1>

                <div class="title_deg">
                    <form action="{{url('search')}}" method="get">
                        @csrf
                        <input type="text" style="color: black" name="search" placeholder="Make Your Search Here">

                        <input type="submit" value="Search" class="btn btn-outline-primary">
                    </form>
                </div>
                <table class="table_deg">
                    <tr>
                        <th>Name</th>
                        <th>Email </th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
                        <th>Delivered</th>
                        <th>Print PDF</th>
                        <th>Send Email</th>






                    </tr>
                    @forelse ($order as $order)


                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$order->image}}" alt="">
                        </td>
                        <td>
                            @if ($order->delivery_status =='processing')

                            <a href="{{url('delivered',$order->id )}}" onclick="return confirm('re you sure this product is delivered! ')" class="btn btn-primary">Delivered</a>
                            @else
                            <p style="color: green"> Delivered </p>
                            @endif
                        </td>

                        <td>
                            <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary"> Print PDF</a>
                        </td>

                        <td>
                            <a href="{{url('send_email',$order->id)}}" class="btn btn-info"> Send Email</a>
                        </td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="16">
                            No Data Found
                        </td>
                    </tr>

                    @endforelse
                </table>



      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
