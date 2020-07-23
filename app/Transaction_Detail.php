<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction_Detail extends Model
{
	// protected $primaryKey = 'kode_transaksi';

 //    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
 //    protected $keyType = 'string';
	// protected $fillable = ['user_id', 'kode_transaksi', 'keterangan_produk', 'total_quantity', 'total_harga', 'pengiriman', 'harga_pengiriman', 'bukti_transfer', 'no_resi', 'status'];

    public function user_transaction(){
    	return $this->belongsTo('App\USer', 'user_id');
    }

    public function trans(){
    	return $this->hasMany('App\Transaction', 'id_transaction_detail');
    }
}
