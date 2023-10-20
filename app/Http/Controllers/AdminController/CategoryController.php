<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;

use PDF;
use Notification;
use App\Models\Image;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Notifications\SendEmailNotification;
class CategoryController extends Controller
{
   
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function view_category()
    {
       $data=category::all();
       return view('admin.add-category',compact('data'));
    }


    
    public function add_category(Request $request)
    {
        
        $data=new category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');

    }

    public function delete_category($id){
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');;
    }

   
}
