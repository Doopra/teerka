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

        @include('admin.header')
        <!-- partial -->

        <div class="main-panel ">
            <div class="content-wrapper">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}

                </div>

            @endif

                <h1 class="title_deg"> All Product</h1>

                <table class="table_deg">
                    <tr>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount Price</th>
                        <th>Product Image</th>
                        <th>Delete Product</th>
                    </tr>


                   @foreach ($product as $product)

                   <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$product->image}}" alt="">

                     </td>
                    <td>
                        <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{url('delete_product', $product->id)}}">Delete</a>
                    </td>
                </tr>

                   @endforeach
                </table>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
