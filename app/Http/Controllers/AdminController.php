<?php

namespace App\Http\Controllers;


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


    public function searchdata(Request $request){
        $searchText=$request->search;
        $order=order::where('name','LIKE',"%$searchText%")->orWhere('phone','LIKE',"%$searchText%")->orWhere('email','LIKE',"%$searchText%")->get();

        return view('admin.order', compact('order'));
    }


}
