<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stand;
use DB;

class StandController extends Controller
{
    
	protected function getStand() {

		$standposts = DB::table('stand')
					->join('event','stand.e_id','=','event.e_id')
					->paginate(4);
		
		return view('elist',compact('standposts'));
	}

	
}
