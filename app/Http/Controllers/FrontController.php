<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use Auth;
use App\User;
use App\Transaction;
use App\Transaction_Detail;

class FrontController extends Controller
{
    public function index(){
        
    	$item = Items::orderBy('created_at', 'Desc' )->get();
    	return view('index',  compact('item'));
    }

    public function detail($id){
    	$detail = Items::findOrfail($id);
    	$item = Items::orderBy('created_at', 'Desc' )->take(3)->get();
    	return view('page.product', compact('detail', 'item'));
    }

    public function contact(){
    	return view('page.contact');
    }

    public function semua_product(){
    	$item = Items::orderBy('created_at', 'Desc' )->paginate(9);
    	return view('page.semua_product',  compact('item'));
    }

    public function riwayat_belanja(){
        $riwayat = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->get();
        // dd($riwayat);
        
        
        return view('page.riwayat-belanja', compact('riwayat', 'resi'));
       
    }

    public function akun(){
        return view('page.setting_akun');
    }

    public function set_akun(Request $request, $id){
        $user = User::findOrfail($id);

        $user->name = $request->nama;
        $user->email = $request->email;
        $user->kota = $request->kota;
        $user->postal_code = $request->postal;
        $user->phone = $request->phone;
        $user->alamat = $request->alamat;
        $user->save();
        return redirect()->back()->with('success', 'Akun sudah berhasil diupdate');
    }
}
