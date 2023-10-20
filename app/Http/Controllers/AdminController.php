<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use PDF;
use Notification;
use App\Models\Image;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Notifications\SendEmailNotification;


class AdminController extends Controller
{
   
   
   
    public function send_email($id){
        $order = order::find($id);
        return view('admin.email_info', compact('order'));
    }

    public function send_user_email(Request $request, $id){
        $order =order::find($id);
        $details = [
            'greeting' => $request->greeting,
            'firstline' => $request->firstline,
            'body' => $request->body,
            'button' => $request->button,
            'url' => $request->url,
            'lastline' => $request->lastline,
        ];

        Notification::send($order,new SendEmailNotification($details));
        return redirect()->back();
    }


    public function searchInfoTest(Request $request){

        
        $searchData = $request->admin_search;
        $search = Booking::where('first_name', 'LIKE', "%$searchData%")
            ->orWhere('last_name', 'LIKE', "%$searchData%")
            ->orWhere('phone', 'LIKE', "%$searchData%")
            ->orWhere('email', 'LIKE', "%$searchData%")
            ->paginate(5); // Adjust the number of items per page as needed
    

          
        return view('admin.search-bookings', compact('search'));
    }

    

}
