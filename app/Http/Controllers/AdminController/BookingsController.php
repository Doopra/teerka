<?php

namespace App\Http\Controllers\AdminController;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BookingsController extends Controller
{
    public function bookings(){
        $booking = Booking::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.admin.admin.bookings', compact('booking'));
    }

    public function allBookings(Request $request){
        
      
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'event_date' => 'required|date',
            'product_title' => 'required',
            'product_price' => 'required|numeric',
            'product_city' => 'required',
            'comment' => 'nullable',
        ]);
        
        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }
        
        $booking = new Booking;
        $booking->title = $request->title;
        $booking->first_name = $request->first_name;
        $booking->last_name = $request->last_name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->event_date = $request->event_date;
        $booking->product_title = $request->product_title;
        $booking->product_price = $request->product_price;
        $booking->product_city = $request->product_city;
        $booking->comment = $request->comment;
        

        
        $booking->save();
        
        return redirect()->back()->with('success','Reservation placed Successfully');
        

      

    }
}
