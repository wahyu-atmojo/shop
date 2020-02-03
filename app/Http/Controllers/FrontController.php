<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

    	return view('index');
    }

    public function detail(){

    	return view('page.product');
    }
}
