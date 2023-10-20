<?php

namespace App\Http\Controllers;


use Stripe;
use Session;
use App\Models\Cart;
use App\Models\User;
use App\Models\Image;
use App\Models\Order;
use App\Models\Booking;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Facades\DB;
use Stripe\Stripe as StripeStripe;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(){
        $products = Product::where('status','1')->take(3)->get();
        $cities = Product::select('city', DB::raw('count(city) as count'))->groupBy('city')->take(4)->get();



        $data = array();

        foreach($products as $product){
            $product_id = $product->id;

            $images = Image::where('product_id',$product_id)->get()->all();

            $product['images']=$images;
            $data[] = $product;



        }

        $virginProducts = Product::where('category','selfcon')->take(3)->get();
        $virdata = array();

        foreach($virginProducts as $property){
            $product_id = $property->id;

            $images = Image::where('product_id',$product_id)->get()->all();

            $property['images']=$images;
            $virdata[] = $property;
        }

        $mostLikeApartment = Product::where('category','1 bedroom flat')->take(1)->get();
        $mostLikeData = array();

        foreach($mostLikeApartment as $mostLiked){
            $product_id = $mostLiked->id;

            $images = Image::where('product_id',$product_id)->get()->all();

            $mostLiked['images']=$images;
            $mostLikeData[] = $mostLiked;
        }





        return view('home.userpage')->with('cities',$cities)->with('products',$data)->with('products',$products)->with('property',$virginProducts)->with('bestApartment',$mostLikeApartment)->with('bestApartment',$mostLikeData);



    }



    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            $product = Product::count();
            $category = Category::count();
            $bookings = Booking::count();
            return view('admin.index', compact('product','category','bookings'));
            

            
        }
        else{
            
            return redirect()->route('home.index');
        }
    }
    public function product_details($id)
    {
        $product=product::find($id);
        return view('home.product_details', compact('product'));

    }

    public function add_cart(Request $request,$id)
    {
        if(Auth::id()){

            $user=Auth::user();
            $product=product::find($id);
            $cart=new cart;
            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;

            $cart->product_title=$product->title;
            if($product->discount_price!=null)
            {
                $cart->price=$product->discount_price * $request->quantity;
            }
            else{
                $cart->price=$product->price * $request->quantity;
            }

            $cart->image=$product->image;
            $cart->product_id=$product->id;
            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect()->back();
        }
        else{
            return redirect('login');
        }
    }
    public function show_cart(){

       if(Auth::id())
       {
        $id=Auth::user()->id;
        $cart=cart::where('user_id','=',$id)->get();
        return view('home.showcart', compact('cart'));
       }
       else{
        return redirect('login');
       }
    }

    public function remove_cart($id)
    {
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back();
    }
    public function cash_order(){
        $user = Auth::user();
        $userid = $user->id;
        $data=cart::where('user_id','=',$userid)->get();

        foreach($data as $data){
            $order = new order;

            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;
            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->product_id;

            $order->payment_status='cash on delivery';
            $order->delivery_status='processing';

            $order->save();

            $cart_id=$data->id;
            $cart_id=cart::find($cart_id);
            $cart_id->delete();
        }

        return redirect()->back()->with('message', 'Your Order Has Been Received, You Will Be Contacted Soon');
    }

    public function stripe($totalprice){
        return view('home.stripe', compact('totalprice'));
    }

    public function stripePost(Request $request, $totalprice){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => $totalprice * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test Payment from Rentsng.com"
        ]);


            $user = Auth::user();
            $userid = $user->id;
            $data=cart::where('user_id','=',$userid)->get();

            foreach($data as $data){
                $order = new order;

                $order->name=$data->name;
                $order->email=$data->email;
                $order->phone=$data->phone;
                $order->address=$data->address;
                $order->user_id=$data->user_id;
                $order->product_title=$data->product_title;
                $order->price=$data->price;
                $order->quantity=$data->quantity;
                $order->image=$data->image;
                $order->product_id=$data->product_id;

                $order->payment_status='paid';
                $order->delivery_status='processing';

                $order->save();

                $cart_id=$data->id;
                $cart_id=cart::find($cart_id);
                $cart_id->delete();
            }



        Session::flash('success', 'Payment Successfully');
        return back();
    }

 public function show_order(){
    if(Auth::id()){
        $user=Auth::user();
        $userid=$user->id;
        $order=order::where('user_id','=',$userid)->get();
        return view('home.order', compact('order'));
    } else{
        return redirect('login');
    }
 }


 public function cancel_order($id){
    $order=order::find($id);
    $order->delivery_status="Order Cancelled";
    $order->save();
    return redirect()->back();

 }

 public function searchdata(Request $request){
    
    $search=$request->searchText;
    $products=product::where('title','LIKE','%'.$search.'%')->orwhere('description','LIKE','%'.$search.'%')->orwhere('state','LIKE','%'.$search.'%')->orwhere('city','LIKE','%'.$search.'%')->paginate(3);


    $data = array();
    foreach($products as $product){
        $product_id = $product->id;

        $images = Image::where('product_id',$product_id)->get()->all();

        $product['images']=$images;
        $data[] = $product;
    }


    return view('home.search_file', ['data' => $data, 'search' => $search, 'data'=> $products]);
}

   
public function property(Product $property) // Accept the Product model instance
{
    $product_id = $property->id;

    $image = Image::where('product_id', $product_id)->limit(6)->get();

    $properties = Product::all();

    $data = array();

    foreach ($properties as $prop) {
        $product_id = $prop->id;

        $images = Image::where('product_id', $product_id)->limit(6)->get();

        $prop['images'] = $images;
        $data[] = $prop;
    }

    return view('home.property')->with('product', $property)->with('image', $image)->with('properties', $data);
}

    public function city_listing($city){
        $products = product::where('city',$city)->with('images')->paginate(3);

        $data = array();
       foreach($products as $product){
        $product_id = $product->id;

        $images = Image::where('product_id',$product_id)->get()->all();

        $product['images']=$images;
        $data[] = $product;
    }


        return view('home.search_file')->with('data',$data)->with('data',$products);


    }




}
