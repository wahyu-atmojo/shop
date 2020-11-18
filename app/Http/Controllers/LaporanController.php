<?php

namespace App\Http\Controllers;
use App\Transaction_Detail;
use PDF;
use DB;

use Illuminate\Http\Request;

class LaporanController extends Controller
{ 
	public function data_jual(Request $request)

	{ 
   		$cari = $request->cari;
	   	$notif = Transaction_Detail::where('status', 2)->first();
		$transaksi = Transaction_Detail::where('status', 3)->where('kode_transaksi','like',"%".$cari."%")->orderBy('updated_at', 'DESC')->paginate(10);
		$t = DB::table('transaction__details')
				    ->join('users', 'users.id', '=', 'transaction__details.user_id')
				    ->select('transaction__details.*', 'users.*')
				    ->where('transaction__details.status', '=', '2')
				    ->get();
		// dd($t);
		return view('admin.laporan_barang_terjual', compact('transaksi', 'notif'));
	}

	public function cetak_pdf()
    {
    	$transaksi = Transaction_Detail::where('status', 3)->orderBy('updated_at', 'DESC')->get();
 
    	$pdf = PDF::loadview('admin.data_jual_pdf',['transaksi' => $transaksi]);
    	return $pdf->download('laporan-penjualan.pdf');
    }
    //
}
