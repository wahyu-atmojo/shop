<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\Transaction_Detail;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
   public function index(Request $request){
   	$cari = $request->cari;
   	$transaksi = Transaction_Detail::where('status', 2)->where('kode_transaksi','like',"%".$cari."%")->orderBy('created_at', 'DESC')->paginate(10);
      // dd($transaksi);
   	return view('admin.list_payment', compact('transaksi'));
   }

   public function sudah_terkirim(Request $request){
   	$cari = $request->cari;
   	$transaksi = Transaction_Detail::where('status', 3)->where('kode_transaksi','like',"%".$cari."%")->orderBy('updated_at', 'DESC')->paginate(10);
   	return view('admin.list_sudah_terkirim', compact('transaksi'));
   }

   public function add_resi(Request $request, $id){
      // dd($id);
   	$transaksi = Transaction_Detail::find($id);
   	$transaksi->no_resi = $request->resi;
   	$transaksi->status = 3;
   	$transaksi->save();

      $trans = Transaction::find($id);
      $trans->status = 3;
      $trans->save();
   	return redirect()->back();
   }
}
