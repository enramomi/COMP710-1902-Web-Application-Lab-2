<?php

namespace App\Http\Controllers;
use App\Booking;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    function getBarber(Request $request){

        $booking = new Booking;
    
        $booking->name = $request->input('name');
        $booking->email = $request->input('email');
        $booking->number = $request->input('number');
        
    
        $booking->save();
         
    
         
        return redirect()->back()->with('success', 'Your Booking is Successfull done!');
    }

}
