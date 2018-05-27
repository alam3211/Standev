<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tenant;
use App\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class BookingController extends Controller
{
    public function bookStore(Request $request)
    {
    	$id = Auth::User()->id;
    	$t_id = Tenant::where('user_id',$id)->first()->t_id;
    	$book_time = date("Y-m-d");
        Booking::create([
            's_id' => $request->pesan,
            't_id' => $t_id,
            'book_time' => $book_time,
            'book_status' => '0',
        ]);

        return redirect('/profile');
    }
}
