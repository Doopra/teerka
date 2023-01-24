<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
     @include('admin.css');

     <style>
         .title_deg{
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 50px;

        }

        label{
            display: inline-block;
            width: 200px;
            font-size: 15px;
            font-weight: bold;
        }
        .btn-info{
            width: 120px;
            height: 50px;
        }
        input{
            color:black;
        }
     </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <h1 class="title_deg">Send Email to {{$order->email}}</h1>

                <form action="{{url('send_user_email', $order->id)}}" method="POST">
                    @csrf

                <div style="padding-left: 35%; padding-top:20px">
                    <label > Email Greetings</label>
                    <input style="color:black" type="text" name="greeting">
                </div>

                <div style="padding-left: 35%; padding-top:20px">
                    <label > Email First Line</label>
                    <input style="color:black" type="text" name="firstline">
                </div>

                <div style="padding-left: 35%; padding-top:20px">
                    <label > Email Body</label>
                    <input style="color:black" type="text" name="body">
                </div>

                <div style="padding-left: 35%; padding-top:20px">
                    <label > Email Button Name</label>
                    <input style="color:black" type="text" name="button">
                </div>

                <div style="padding-left: 35%; padding-top:20px">
                    <label > Email Url</label>
                    <input style="color:black" type="text" name="url">
                </div>

                <div style="padding-left: 35%; padding-top:20px">
                    <label > Email Last Line</label>
                    <input style="color:black" type="text" name="lastline">
                </div>

                <div style="padding-left: 35%; padding-top:20px">

                    <input type="submit" value="Send Email" class="btn btn-info">
                </div>




            </form>

            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
