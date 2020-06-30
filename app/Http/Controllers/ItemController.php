<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class ItemController extends Controller
{
    public function index(Request $request){
        $cari = $request->cari;
        $item = Items::orderBy('created_at', 'Desc' )->where('name','like',"%".$cari."%")->paginate(10);
    	return view('admin.items.index', compact('item'));
    }

    public function produk_kosong(Request $request){
        $cari = $request->cari;
        $item = Items::orderBy('created_at', 'Desc' )->where('name','like',"%".$cari."%")->where('stock', 0)->paginate(10);
        return view('admin.items.produk_kosong', compact('item'));
    }

    public function produk_diskon(Request $request){
        $cari = $request->cari;
        $item = Items::orderBy('created_at', 'Desc' )->where('name','like',"%".$cari."%")->paginate(10);
        return view('admin.items.produk_diskon', compact('item'));
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
        $item->stock        = $request->jumlah;
    	$item->diskon 		= $request->diskon;
    	// dd($item);
    	$item->save();

    	return redirect('/dashboard')->with(['success' => 'Produk Berhasil Ditambahkan']);
    }

    public function edit($id){
        $item = Items::findOrFail($id);
        return view('admin.items.edit', compact('item'));
    }

    public function edit_proses(Request $request, $id){
        $this->validate($request, [
            'name'      => 'required',
            'price'     => 'required|integer',
            'keterangan'=> 'required',
            'image'     => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'jumlah'    => 'required'
        ]);

        $item = Items::findOrFail($id);
        $item->name         = $request->name;
        $item->price        = $request->price;
        $item->description  = $request->keterangan;

        if($request->hasFile('image')){
            $produk = $request->file('image');
            $image = uniqid().'.'. $produk->getClientOriginalExtension();
            // \Image::make($gambar)->resize(300,300)->save(public_path('/public/gambar/'. $filename));
            $produk->move(public_path('/produk'), $image);
        }

        $item->image        = $image;
        $item->stock        = $request->jumlah;
        $item->diskon       = $request->diskon;

        // dd($item);
        $item->save();

        return redirect('/dashboard');
    }

    public function delete($id){
        $item = Items::findOrFail($id);

        $item->delete();
        return redirect('/dashboard');
        
    }

    public function add_stock($id){
        $item = Items::findOrFail($id);
        return view('admin.items.add_stock', compact('item'));
    }

    public function add_stock_proses(Request $request, $id){
        $this->validate($request, [
            'jumlah'    => 'required'
        ]);

        $item = Items::findOrFail($id);
        $item->stock        = $item->stock + $request->jumlah;
        // dd($item);
        $item->save();

        return redirect('/dashboard');
    }
}
