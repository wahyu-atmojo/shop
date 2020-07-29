<?php

namespace App\Http\Controllers;

use App\Mail\TransactionMail;
use Illuminate\Http\Request;
use App\Transaction;
use App\Transaction_Detail;
use App\Items;
use Session;
use Auth;

class CheckoutController extends Controller
{
    public function checkout(){
    	$cart = session()->get('cart');
        // dd($cart);
        $subtotal = collect($cart)->sum(function($q) {
            return $q['quantity'] * $q['price'];
        });
        $notif = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->first();
        // dd($subtotal);
    	return view('page.checkout', compact('subtotal', 'notif'));
    }

    public function prosescheckout($id){

    	$cart = session()->get('cart');
        // dd($cart);
   		$nama_produk = "";
   		$id_produk = 0;
        $subtotal = collect($cart)->sum(function($q) {
            return $q['quantity'] * $q['price'];
        });

        $total_cart = collect($cart)->sum(function($s){
        	return $s['quantity'];
        });

        // dd($total_cart);

        // $i=0;
        // $nama_produk=[];
        // foreach($cart as $produk){
        //             $nama_produk[$i]= $produk['id'];
        //             $nama_produk[$i]= $produk['name'];
        //             $i=$i+1;
        //         }
        // dd($nama_produk);

        // dd($total_cart);

        $code = 'TJ'.$id.date('y').date('m').str_random(6);

        // $data_transaksi = Transaction::where('kode_transaksi', $transaksi->kode_transaksi)->first();
        // dd($data_transaksi);
        $harga_pengiriman = 200000;
        // $total_jumlah = Transaction::where('kode_transaksi', $transaksi->kode_transaksi)->sum('quantity');
        // $total_price = Transaction::where('kode_transaksi', $transaksi->kode_transaksi)->sum('subtotal');
            $transaksi_detail = new Transaction_Detail;
            $transaksi_detail->user_id = $id;
            $transaksi_detail->kode_transaksi = $code;
            $transaksi_detail->total_quantity = $total_cart;
            $transaksi_detail->total_harga = $subtotal + $harga_pengiriman;
            $transaksi_detail->harga_pengiriman = $harga_pengiriman;
            $transaksi_detail->pengiriman = 'JNE';
            $transaksi_detail->bukti_transfer = Null;
            $transaksi_detail->no_resi = Null;
            $transaksi_detail->status = 1;

            // dd($transaksi_detail);
            $transaksi_detail->save();

        foreach($cart as $produk){
        	// $nama_produk=$nama_produk.$produk['id'];
            // dd($code)
	    	$transaksi = new Transaction;
	    	$transaksi->kode_transaksi = $code;
            $transaksi->user_id = $id;
            $transaksi->id_transaction_detail = $transaksi_detail->id;
	    	$transaksi->produk_id = $produk['id'];
	    	$transaksi->keterangan_produk = $produk['name'];
	    	$transaksi->subtotal = $produk['price'];
            $transaksi->quantity = $produk['quantity'];
            $transaksi->image_produk = $produk['photo'];
	    	$transaksi->status = 1;

	    	// dd($transaksi);
	    	$transaksi->save();

            // dd($transaksi);

            // $stock_produk = Items::find($produk['id']);
            // $stock_produk->stock = $stock_produk->stock - $produk['quantity'];

            // $stock_produk->save();
        }

	    session::forget('cart');
	    	// \Mail::to($transaksi->user->email)->send(new TransactionMail($transaksi));
	    	return redirect('/bukti-transfer')->with(['success' => 'Produk Berhasil Ditambahkan']);

    	

    }

    public function bukti_transfer(){

        $notif = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->first();
    	$transaksi = Transaction_Detail::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
    	return view('page.upload_transfer', compact('transaksi', 'notif'));
    }

    public function add_bukti(Request $request, $id){
    	$this->validate($request, [
            
            'filename' => 'required','mimes:pdf,jpeg,png,jpg,gif,svg', 'max:2048',
            
        ]);

        if($request->hasFile('filename')){
            $file = $request->file('filename');
            $foto = time().'.'. $file->getClientOriginalExtension();
             $file->move(public_path('/bukti_transfer'), $foto);
        }

    	$transaksi = Transaction_Detail::find($id);
    	$transaksi->bukti_transfer = $foto;
    	$transaksi->status = 2;
        // $transaksi->trans->id_transaction_detail = $id;
        // dd($transaksi);
    	$transaksi->save();
        // dd($transaksi->kode_transaksi);

        // $trans = Transaction::find($transaksi->kode_transaksi);
        // $trans->status = 2;
        // $trans->id_transaction_detail = $transaksi->id;
        // dd($trans);
        // $trans->save();

        $jumlah = Transaction::where('kode_transaksi', $transaksi->kode_transaksi)->where('status', 2)->get();
        foreach($jumlah as $jml){
            $jml_produk = $jml->produk_id;

            $stock_produk = Items::find($jml->produk_id);
            $stock_produk->stock = $stock_produk->stock - $jml->quantity;
            // dd($stock_produk);

            $stock_produk->save();

        }
       
    	// \Mail::to($transaksi->user->email)->send(new TransactionMail($transaksi));
	    return redirect('/')->with(['success' => 'Terima Kasih sudah berbelanja di UD. Tumbuh Jati. Tunggu konfirmasi admin untuk segera dikiriamkan nomor resi']);

    }


    public function mycart(){
        $kode = Transaction::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        $total = Transaction::where('user_id', Auth::user()->id)->where('status', 1)->where('kode_transaksi', $kode->kode_transaksi)->sum('quantity');
        $subtotal = Transaction::where('user_id', Auth::user()->id)->where('status', 1)->where('kode_transaksi', $kode->kode_transaksi)->sum('subtotal');
        $notif = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->first();


    	$transaksi = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 1)->where('kode_transaksi', $kode->kode_transaksi)->get();
        // dd($transaksi);
        if(!$transaksi->isEmpty()){
        	

        	return view('page.my-cart', compact('transaksi', 'subtotal', 'total', 'notif'));

        }else{
            return redirect('/')->with('warning', 'Anda tidak punya pembelian yang belum terbayar');
        }
    }
}
