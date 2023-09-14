<?php

namespace App\Http\Controllers\AdminController;

use PDF;
use Notification;
use App\Models\Image;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Notifications\SendEmailNotification;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

     public function view_product(){
        $category=category::all();
  return view('admin.add_product',compact('category'));
   //   return view('admin.product',compact('category'));
    }

    public function delete_product($id){
        $product=product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');;
    }


    public function add_product(Request $request)
    {
     
        
        $product=new product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->state=$request->state;
        $product->city=$request->city;
        $product->status = $request->status == true ? '1':'0';
        $product->quantity=$request->quantity;
        $product->discount_price=$request->discount_price;
        $product->category=$request->category;
        

        
        $product->save();


        $image=$request->image;
        $product_id = $product->id;

       if($request->hasFile('image'))
        {

        foreach($request->file('image')as $image){
            $imageModel = new Image();
            $imageName = Str::slug($product['title']).'-image-'.time().rand(1,1000).'.'.$image->extension();
            $image->move(public_path('product'),$imageName);
            $imageModel->product_id = $product_id;
            $imageModel->image=$imageName;
            
            $imageModel->save();

            
        }
        

     }

        return redirect()->back()->with('message','Product Added Successfully');

    }

    public function show_product(){
        $product = product::all();
        return view('admin.product_page', compact('product'));
    }


}
