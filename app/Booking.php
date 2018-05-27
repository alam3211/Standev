<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = [
    	's_id',
    	't_id',
    	'book_time',
    	'book_status',
	];
}
