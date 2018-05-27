<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Event;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getProfile(Request $request) {
        
    if (Auth::Check()) {
        $getid = Auth::User()->id;
        if (Auth::User()->role === 1) {
            $profiles = DB::table('stand')
                    ->join('event','stand.e_id','=','event.e_id')
                    ->where('user_id',$getid)
                    ->get();
            $imgprofile = Event::where('user_id',$getid)->first();
        }else{
            $profiles = DB::table('booking')
                    ->join('tenant','booking.t_id','=','tenant.e_id')
                    ->where('user_id',$getid)
                    ->get();

        }
    }
    
    return view('profile.profile',compact('profiles'))->with('imgprofile',$imgprofile->e_poster);
    }
}
