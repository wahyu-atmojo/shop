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
        if(Auth::check()){

            $notif = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->first();
            // dd($notif);
        }
        // dd($notif);
    	$item = Items::orderBy('created_at', 'Desc' )->get();
    	return view('index',  compact('item', 'notif'));
    }

    public function detail($id){
        if(Auth::check()){
        $notif = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->first();
            }
    	$detail = Items::findOrfail($id);
    	$item = Items::orderBy('created_at', 'Desc' )->take(3)->get();
    	return view('page.product', compact('detail', 'item', 'notif'));
    }

    public function contact(){
        if(Auth::check()){
        $notif = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->first();
            }
    	return view('page.contact', compact('notif'));
    }

    public function semua_product(){
        if(Auth::check()){
            $notif = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->first();
        }
    	$item = Items::orderBy('created_at', 'Desc' )->paginate(9);
    	return view('page.semua_product',  compact('item', 'notif'));
    }

    public function riwayat_belanja(){
        $riwayat = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->get();
        $notif = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->first();
        $read = Transaction_Detail::find($notif['id']);
        // dd($notif);
        if($notif == Null){
            return view('page.riwayat-belanja', compact('riwayat', 'resi', 'notif'));
        }else{
            if($read->notif_status_member == 1){

                $read->notif_status_member = 0;
                $read->save();
                return view('page.riwayat-belanja', compact('riwayat', 'resi', 'notif'));

            }else{
                return view('page.riwayat-belanja', compact('riwayat', 'resi', 'notif'));

            };

        };
 
    }

    public function akun(){
        if(Auth::check()){
        $notif = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->first();
            }
        return view('page.setting_akun', compact('notif'));
    }

    public function gallery(){
        if(Auth::check()){
        $notif = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->first();
            }
        return view('page.gallery', compact('notif'));
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

    public function faq(){
        return view('page.faq');
    }
}
