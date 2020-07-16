<?php

namespace App\Http\Controllers;

use App\Mail\TransactionMail;
use Illuminate\Http\Request;
use App\Transaction;
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
        // dd($subtotal);
    	return view('page.checkout', compact('subtotal'));
    }

    public function prosescheckout($id){

    	$cart = session()->get('cart');
   		$nama_produk = "";
   		$id_produk = 0;
        $subtotal = collect($cart)->sum(function($q) {
            return $q['quantity'] * $q['price'];
        });

        $total_cart = collect($cart)->sum(function($s){
        	return $s['quantity'];
        });

        // dd($total_cart);

        foreach($cart as $produk){
        	$nama_produk=$nama_produk.$produk['name'].$produk['quantity'];
        	
        }
        $code = 'TJ'.$id.date('y').date('m').str_random(6);
        // dd($code)
	    	$transaksi = new Transaction;
	    	$transaksi->kode_transaksi = $code;
	    	$transaksi->user_id = $id;
	    	$transaksi->keterangan_produk = json_encode($cart);
	    	$transaksi->subtotal = $subtotal + 200000;
	    	$transaksi->quantity = $total_cart;
	    	$transaksi->pengiriman = 'JNE';
	    	$transaksi->harga_pengiriman = '200000';
	    	$transaksi->bukti_transfer = Null;
	    	$transaksi->status = 1;
	    	// dd($transaksi);
	    	$transaksi->save();

	    session::forget('cart');
	    	// \Mail::to($transaksi->user->email)->send(new TransactionMail($transaksi));
	    	return redirect('/bukti-transfer')->with(['success' => 'Produk Berhasil Ditambahkan']);

    	

    }

    public function bukti_transfer(){
    	$cart = session()->get('cart');
   		$nama_produk = "";
   		$nama_produk = "";
        $subtotal = collect($cart)->sum(function($q) {
            return $q['quantity'] * $q['price'];
        });

        $total_cart = collect($cart)->sum(function($s){
        	return $s['quantity'];
        });

    	$transaksi = Transaction::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
    	return view('page.upload_transfer', compact('transaksi', 'subtotal'));
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

    	$transaksi = Transaction::find($id);
    	$transaksi->bukti_transfer = $foto;
    	$transaksi->status = 2;
    	// dd($transaksi);
    	$transaksi->save();
    	// \Mail::to($transaksi->user->email)->send(new TransactionMail($transaksi));
	    return redirect('/')->with(['success' => 'Terima Kasih sudah berbelanja di UD. Tumbuh Jati. Kami akan mengirimkan resi pengiriman lewat email']);

    }


    public function mycart(){
    	$transaksi = Transaction::where('user_id', Auth::user()->id)->where('status', 1)->orderBy('created_at', 'DESC')->first();
        // dd($transaksi);
        if($transaksi){
        	$cart = json_decode($transaksi->keterangan_produk, true);
        	// dd($cart);

        	return view('page.my-cart', compact('transaksi', 'cart'));

        }else{
            return redirect()->back()->with('warning', 'Anda tidak punya pembelian yang belum terbayar');
        }
    }
}
