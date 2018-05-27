<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    //
    protected $table = 'stand';
    protected $fillable = [
            'e_id',
            's_length',
            's_width',
            's_price',
            's_available',
            's_type',
            's_fac_desc',
            's_photo',
    ];

}
