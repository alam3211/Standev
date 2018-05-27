<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
        }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $username = 'username';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getProfile(Request $request) {
        
    if (Auth::Check()) {
        if (Auth::User()->role === 1) {
            $profiles = DB::table('stand')
                    ->join('event','stand.e_id','=','event.e_id')
                    ->get();
        }else{
            $profiles = DB::table('booking')
                    ->join('tenant','booking.t_id','=','tenant.e_id')
                    ->get();

        }
    }
    
    return view('profile.profile',compact('profiles'));
    }
        
}
