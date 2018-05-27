<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stand;
use DB;

class StandController extends Controller
{
    
	protected function getStand() {

		$standposts = DB::table('stand')
					->join('event','stand.id_event','=','event.id')
					->get();

		return view('elist',compact('standposts'));
	}
}
