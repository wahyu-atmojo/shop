<?php

namespace App\Http\Controllers;
use App\Transaction;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
   public function index(Request $request){
   	$cari = $request->cari;
   	$transaksi = Transaction::where('status', 2)->where('kode_transaksi','like',"%".$cari."%")->orderBy('created_at', 'DESC')->paginate(10);
   	return view('admin.list_payment', compact('transaksi'));
   }

   public function sudah_terkirim(Request $request){
   	$cari = $request->cari;
   	$transaksi = Transaction::where('status', 3)->where('kode_transaksi','like',"%".$cari."%")->orderBy('updated_at', 'DESC')->paginate(10);
   	return view('admin.list_sudah_terkirim', compact('transaksi'));
   }

   public function add_resi(Request $request, $id){
   	$transaksi = Transaction::find($id);
   	$transaksi->no_resi = $request->resi;
   	$transaksi->status = 3;
   	$transaksi->save();
   	return redirect()->back();
   }
}
