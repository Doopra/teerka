<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     @include('admin.css')

     <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{
            color: black;
            padding-bottom: 20px;
        }
        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid green
        }
        label{
            display: inline-block;
            width: 200px;

        }
        .div_desgin{
            padding-bottom: 15px;
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

                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{session()->get('message')}}

                </div>

                @endif
                <div class="div_center">
                    <h1 class="h2_font"> Add Product</h1>
                    <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="div_desgin">
                        <label >Product Title:</label>
                        <input class="text_color" type="text" name="title" placeholder="Write a title" required>

                    </div>

                    <div class="div_desgin">
                        <label >Product Description:</label>
                        <input class="text_color" type="text" name="description"  placeholder="Write a Description" required>

                    </div>



                    <div class="div_desgin">
                        <label >Product Price:</label>
                        <input class="text_color" min="0" type="number" name="price" placeholder="Type the price" required>

                    </div>

                    <div class="div_desgin">
                        <label >State</label>
                        <input class="text_color" type="text" name="state" placeholder="Which state is it located" required>

                    </div>

                    <div class="div_desgin">
                        <label >City:</label>
                        <input class="text_color" type="text" name="city" placeholder="Which city is it located" required>

                    </div>

                    <div class="div_desgin">
                        <label >Status</label>
                        <input type="checkbox"  name="status" >

                    </div>

                    <div class="div_desgin">
                        <label >Product Quantity:</label>
                        <input class="text_color"  min="0" type="number" name="quantity" placeholder="Type the Quantity" required>

                    </div>

                    <div class="div_desgin">
                        <label >Discount Price:</label>
                        <input class="text_color" type="number" name="discount_price" placeholder="type discount">

                    </div>

                    <div class="div_desgin">
                        <label>Product Category:</label>
                        <select class="text_color" name="category" id="">
                            <option value="" selected required>Add a category here</option>
                            @foreach ($category as $category )



                            <option value="{{$category->category_name}}" selected required>{{$category->category_name}}</option>

                            @endforeach
                        </select>

                    </div>

                    <div class="div_desgin">
                        <label>Product Image Here:</label>
                            <input type="file" name="image[]" id="image" accept="image/*"
                            multiple>
                        </select>

                    </div>

                    <div class="div_desgin">

                            <input type="submit" value="Add Product" class="btn btn-primary" name="submit">
                        </select>

                    </div>
                </form>

            </div>
           </div>

    </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->


    <script>
       $("#image").on("change", function() {
    if ($("#image")[0].files.length > 7) {
        alert("Please don't select more than 7 images");
    } else {
        $("#imageUploadForm").submit();
    }
});



    </script>
  </body>
</html>
