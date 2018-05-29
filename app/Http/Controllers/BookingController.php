<?php

namespace App\Http\Controllers;

use App\Tenant;
use App\Booking;
use App\Event;
use App\Stand;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class BookingController extends Controller
{
    public function bookStore(Request $request)
    {
    	$id = Auth::User()->id;
    	$t_id = Tenant::where('user_id',$id)->first()->t_id;
    	$book_time = date("Y-m-d H:i:s");
        Booking::create([
            's_id' => $request->pesan,
            't_id' => $t_id,
            'book_time' => $book_time,
            'book_status' => '0',
        ]);

        return redirect('/profile');
    }

    public function bookValidation(Request $request)
    {
        $bookvalid = Booking::where('b_id',$request->bookid)->first();
        $bookvalid->book_status = $request->accept ?? $request->decline;
        $bookvalid->save();
        if ($request->accept) {
            $kuota = Stand::where('s_id',$bookvalid->s_id)->first();
            $kuota->s_available -= 1;
            $kuota->save();
        }
        
        return redirect()->action('BookingController@getBook');
    }


    public function getBook()
    {
        $id = Auth::User()->id;
        $e_id = Event::where('user_id',$id)->first()->e_id;
        $booklists = DB::table('booking')
                    ->join('stand','booking.s_id','=','stand.s_id')
                    ->join('event','stand.e_id','=','event.e_id')
                    ->join('tenant','booking.t_id','=','tenant.t_id')
                    ->where('event.e_id',$e_id)
                    ->where('booking.book_status','0')
                    ->get();

        return view('profile.book_list',compact('booklists'));
    }
}
