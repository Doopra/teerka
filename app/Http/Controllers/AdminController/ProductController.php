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
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use App\Notifications\SendEmailNotification;

class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }

    private function categoryData()
    {
        $category = Category::all();
        return compact('category');
    }


     public function view_product(){
        
        return view('admin.add-product', $this->categoryData());
  
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
        $product->email=$request->email;
        $product->address = $request->address;
        $product->phone = $request->phone;
        $citySlug = Str::slug(strtolower($request->city));
        $product->city = $citySlug;
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

     return redirect()->route('admin.show_product', ['id' => $product->id])->with('message', 'Product Updated Successfully');

    }
    public function show_product(){
        $products = Product::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.show_product', compact('products'));
            
    }
    
    public function edit_product( $id){
        $product = Product::find($id);

        
        return view('admin.edit-product', array_merge(compact('product'), $this->categoryData()));
    }
    
    public function store_edit_product(Request $request, $id){

        $product = Product::findOrFail($id);

    // Update product details
    $product->title = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->state = $request->state;
    $product->email = $request->email;
    $product->address = $request->address;
    $product->phone = $request->phone;
    $citySlug = Str::slug(strtolower($request->city));
    $product->city = $citySlug;
    $product->status = $request->status == true ? '1' : '0';
    $product->quantity = $request->quantity;
    $product->discount_price = $request->discount_price;
    $product->category = $request->category;

    $product->save();

    // Delete selected images
    if ($request->has('delete_images')) {
        foreach ($request->input('delete_images') as $imageId) {
            $imageToDelete = Image::find($imageId);
            if ($imageToDelete) {
                // Delete the image file from storage
                Storage::delete('product/' . $imageToDelete->image);

                // Delete the image record from the database
                $imageToDelete->delete();
            }
        }
    }

    // Update or add images
    if ($request->hasFile('image')) {
        foreach ($request->file('image') as $image) {
            $imageModel = new Image();
            $imageName = Str::slug($product->title) . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
            $image->move(public_path('product'), $imageName);
            $imageModel->product_id = $product->id;
            $imageModel->image = $imageName;

            $imageModel->save();
        }
    }

    return redirect()->back()->with('message', 'Product Updated Successfully');
    }

}
