<?php

namespace App\Http\Controllers;

use App\Stand;
use App\Event;
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
            's_width' => 'required|integer',
            's_length' => 'required|integer',
            's_price' => 'required|numeric',
            's_kuota' => 'required|integer',
            's_desc' => 'string',
            'lampu',
            'kursi',
            'meja',
            'tv',
            'kabel',
            'tenda',
            ]);
		//isset($_POST['lampu']) == '1' ? '1' : '0'
		$id = Auth::User()->id;
		$getid = Event::where('user_id',$id)->first()['id'];
    	
    	Stand::create([
            'id_event' => $getid,
            's_length' => $request->s_length,
            's_width' => $request->s_width,
            's_price' => $request->s_price,
            's_available' => $request->s_kuota,
            's_facility' => $request->s_desc,
        ]);

        return view('elist');
    }
}
