<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table = 'event';
    protected $fillable = [
    	'user_id',
    	'e_name',
    	'e_location',
    	'e_city',
    	'e_telp',
    	'e_email',
    	'e_poster',
    	'e_startdate',
    	'e_enddate',
    	'e_description',
    ];
}