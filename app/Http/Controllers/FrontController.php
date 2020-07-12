<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use Auth;

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
}
