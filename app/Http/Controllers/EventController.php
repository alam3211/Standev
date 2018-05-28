<?php

namespace App\Http\Controllers;

use App\Stand;
use App\Event;
use App\Tenant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class EventController extends Controller
{
    protected function store(Request $request)
    {
    	$this->validate($request, [
            's_width' => 'required|numeric',
            's_length' => 'required|numeric',
            's_price' => 'required|numeric',
            's_kuota' => 'required|integer',
            's_desc' => 'string',
            's_photo' => 'file|max:2000|mimes:jpeg,png',
            'lampu',
            'kursi',    
            'meja',
            'tv',
            'kabel',
            'tenda',
            ]);
		//isset($_POST['lampu']) == '1' ? '1' : '0'
		$id = Auth::User()->id;
		$getid = Event::where('user_id',$id)->first();
        $path = $request->file('s_photo')->store('public/files');
        Stand::create([
            'e_id' => $getid->e_id,
            's_length' => $request->s_length,
            's_width' => $request->s_width,
            's_price' => $request->s_price,
            's_available' => $request->s_kuota,
            's_fac_desc' => $request->s_desc,
            's_photo' => $path,
        ]);

        return redirect()->action('StandController@getStand');
    }
}
