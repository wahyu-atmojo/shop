<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    // protected $primaryKey = 'kode_transaksi'; 

    // public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    // protected $keyType = 'string';
    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    public function trans_detail(){
    	return $this->belongsTo('App\Transaction_Detail', 'id_transaction_detail');
    }

}
