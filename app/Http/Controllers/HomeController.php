<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Event;
use App\Tenant;
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
        if (Auth::User()->role === 1) { #event profile
            $profiles = DB::table('stand')
                    ->join('event','stand.e_id','=','event.e_id')
                    ->where('user_id',$getid)
                    ->paginate(5);
            $imgprofile = Event::where('user_id',$getid)->first()->e_poster;
        }else{ #tenant profile
            $profiles = DB::table('booking')
                    ->join('tenant','booking.t_id','=','tenant.t_id')
                    ->join('stand','stand.s_id','=','booking.s_id')
                    ->join('event','event.e_id','=','stand.e_id')
                    ->where('tenant.user_id',$getid)
                    ->paginate(5);
            $imgprofile = Tenant::where('user_id',$getid)->first()->t_product;
        }
    }
    //dd($profiles);
    return view('profile.profile',compact('profiles'))->with('imgprofile',$imgprofile);
    }
}
