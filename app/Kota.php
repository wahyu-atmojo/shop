<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $fillable = [
        'id','id_provinsi','nama', 'postal_code', 'lat', 'lng'
    ];

    public function user_kota(){
    	return $this->hasMany('App\User');
    }
}
