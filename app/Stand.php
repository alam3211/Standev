<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    //
    protected $table = 'stand';
    protected $fillable = [
            'id_event',
            's_length',
            's_width',
            's_price',
            's_available',
            's_facility',
    ];

}
