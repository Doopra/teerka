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


class OrdersController extends Controller
{
    public function order(){
        $order = order::all();
        return view('admin.order', compact('order'));
    }

    public function delivered($id)
    {
        $order=order::find($id);
        $order->delivery_status="delivered";
        $order->payment_status="paid";

        $order->save();

        return redirect()->back();

    }

    public function print_pdf($id){
        $order=order::find($id);
        $pdf = PDF::loadView('admin.pdf',compact('order'));

        return $pdf->download('order_details.pdf');

    }

}
