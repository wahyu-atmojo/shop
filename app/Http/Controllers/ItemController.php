<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class ItemController extends Controller
{
    public function index(){
        $item = Items::orderBy('created_at', 'Desc' )->paginate(10);
    	return view('admin.items.index', compact('item'));
    }

    public function add(){

    	return view('admin.items.add');
    }

    public function add_proses(Request $request){
    	$this->validate($request, [
            'name'      => 'required',
    		'price'		=> 'required|integer',
    		'keterangan'=> 'required',
    		'image'		=> 'required|file|image|mimes:jpeg,png,jpg|max:2048',
    		'jumlah'	=> 'required'
    	]);

    	$item = new Items;
        $item->name         = $request->name;
    	$item->price 		= $request->price;
    	$item->description	= $request->keterangan;

    	if($request->hasFile('image')){
            $produk = $request->file('image');
            $image = uniqid().'.'. $produk->getClientOriginalExtension();
            // \Image::make($gambar)->resize(300,300)->save(public_path('/public/gambar/'. $filename));
            $produk->move(public_path('/produk'), $image);
        }

    	$item->image 		= $image;
    	$item->stock 		= $request->jumlah;
    	// dd($item);
    	$item->save();

    	return redirect('/dashboard');
    }
}
