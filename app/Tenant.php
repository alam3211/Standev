<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    //
    protected $table = 'tenant';
    protected $fillable = [
            'id_login',
            't_name',
            't_city',
            't_telp',
            't_email',
            't_description',
            't_product',
    ];
}
