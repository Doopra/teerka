<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/assets/css/css/style.css" type="text/css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" scoped>

    <title>Dashboard</title>
</head>
<body>

    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>Teer</span>ka.com</p>
        <a href="#" class="icon-a"> <i class="fa fa-dashboard icons"></i>&nbsp;&nbsp; Dashboard  </a>
        <a href="#" class="icon-a"> <i class="fa fa-users  icons"></i>&nbsp;&nbsp; Customers  </a>
        <a href="product.html" class="icon-a"> <i class="fa fa-list  icons"></i>&nbsp;&nbsp; Product  </a>
        <a href="" class="icon-a"> <i class="fa fa-shopping-bag  icons"></i>&nbsp;&nbsp; Successfully Booked  </a>
        <a href="category.html" class="icon-a"> <i class="fa fa-tasks  icons"></i>&nbsp;&nbsp; Categories  </a>
       
        <a href="#" class="icon-a"> <i class="fa fa-list-alt icons"></i>&nbsp;&nbsp; Task  </a>
        <a href="#" class="icon-a"> <i class="fa fa-user  icons"></i>&nbsp;&nbsp; Accounts  </a>
    </div>


    <div id="main">
        <div class="head">
            <div class="col-div-6">
                <span style="font-size: 30px; cursor:pointer; color:white;" class="nav"> &#9776; Product</span>
                <span style="font-size: 30px; cursor:pointer; color:white;" class="nav2"> &#9776; Dashboard</span>
            </div>
            <div class="col-div-6">
              
                <div class="profile">
                    <img src="images/saviour.PNG" class="pro-img" alt="">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="logoutDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{Auth::user()->name}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="logoutDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                              @method('DELETE')
                                
                            </form>
                        </div>
                    </div>
            </div>
            </div>
            <div class="clearfix"></div>
        </div>

            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                {{session()->get('message')}}

            </div>
            @endif
        <div class="col-div-3">
            <div class="box">
                <p>67 <br/> <span>Customers</span></p>
                <i class="fa fa-users box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>88 <br/> <span>Product</span></p>
                <i class="fa fa-list box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>97 <br/> <span>Bookings</span></p>
                <i class="fa fa-shopping-bag box-icon"></i>
            </div>
        </div>
        <div class="col-div-3">
            <div class="box">
                <p>79 <br/> <span>Categories</span></p>
                <i class="fa fa-tasks box-icon"></i>
            </div>
        </div>

        <div class="clearfix"></div>
        


        <div class="col-div-10">
            <div class="box-10">
                <div class="content-box">

                    <p> Products <a href="{{url('/view_product')}}"> <span> Add product </span></a></p> <br/>

                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                            <th>Status</th>


                        </tr>
                        @foreach ($product as $product)
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>

                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <img class="img_size" src="/product/{{$product->image}}" alt="">
        
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{url('delete_product', $product->id)}}">Delete</a>
                            </td>
                            
                 </tr>
                 @endforeach
                    </table>

                </div>
            </div>
        </div>
         
        



        <div class="clearfix"></div>
    </div>



<script src="https:ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  


<script>
    $(".nav").click(function(){
        $("#mySidenav").css('width','70px');
        $("#main").css('margin-left','70px');
        $(".logo").css('visibility','hidden');
        $(".logo span").css('visibility','visible');
        $(".logo span").css('margin-left','-10px');
        $(".icon-a").css('visibility','hidden');
        $(".icons").css('visibility','visible');
        $(".icons").css('margin-left','-8px');
        $(".nav").css('display','none');
        $(".nav2").css('display','block');
    });

    $(".nav2").click(function(){
        $("#mySidenav").css('width','300px');
        $("#main").css('margin-left','300px');
        $(".logo").css('visibility','visible');
        $(".logo span").css('visibility','visible');
        $(".icon-a").css('visibility','visible');
        $(".icons").css('visibility','visible');
        $(".nav").css('display','block');
        $(".nav2").css('display','none');
    });
</script>

@include('admin.script')
</body>
</html>