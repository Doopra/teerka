<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    //index page
    public function register(){
        return view('usermanagent.usertable');
    }

    public function registerPost(Request $request){
        
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->back();
    }

    public function loginPost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)){

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
    }

    public function logout(){
        Auth::logout();
    //    return route('teerka');
        return redirect()->route('teerka');
    }
}
