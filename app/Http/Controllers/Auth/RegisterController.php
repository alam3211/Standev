<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Event;
use App\Tenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = ('/login');

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function euserStore(Request $request)
    {
        $this->validate($request, [
            'l_name' => 'required|string|max:255',
            'l_password' => 'required|string|min:6',
            'e_name' => 'required|string|max:255',
            'e_loc' => 'required|string|max:255',
            'e_city' => 'required|string|max:255',
            'e_desc' => 'required|string|max:255',
            'e_date1' => 'required',
            'e_telp' => 'required',
            'e_poster' => 'file|max:2000|mimes:jpeg,png',
            'e_email' => 'required|email',
            ]);

        User::create([
            'username' => $request->l_name,
            'password' => Hash::make($request->l_password),
            'role' => '1',
            'status' => '0',
        ]);

        $getid = User::where('username',$request->l_name)->first();
        $path = $request->file('e_poster')->store('public/files');

        Event::create([
            'user_id' => $getid->id,
            'e_name' => $request->e_name,
            'e_location' => $request->e_loc,
            'e_city' => $request->e_city,
            'e_telp' => $request->e_telp,
            'e_email' => $request->e_email,
            'e_date' => $request->e_date1,
            'e_description' => $request->e_desc,
            'e_poster' => $path,
        ]);

        return redirect('/login');
    }

    protected function tuserStore(Request $request)
    {
        $this->validate($request, [
            'l_name' => 'required|string|max:255',
            'l_password' => 'required|string|min:6',
            't_name' => 'required|string|max:255',
            't_city' => 'required|string|max:255',
            't_desc' => 'required|string|max:255',
            't_telp' => 'required',
            't_type' => 'required',
            't_email' => 'required|email',
            't_product' => 'required|file|max:2000|mimes:jpeg,png',
            ]);

        User::create([
            'username' => $request->l_name,
            'password' => Hash::make($request->l_password),
            'role' => '2',
            'status' => '0',
        ]);

        $getid = User::where('username',$request->l_name)->first();
        $path = $request->file('t_product')->store('public/files');

        Tenant::create([
            'user_id' => $getid->id,
            't_name' => $request->t_name,
            't_city' => $request->t_city,
            't_telp' => $request->t_telp,
            't_type' => $request->t_type,
            't_email' => $request->t_email,
            't_description' => $request->t_desc,
            't_product' => $path,
        ]);

        return redirect('/login');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $request
     * @return \App\User
     */
    protected function create(array $request)
    {
    }
    
}
