<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use App\Transaction_Detail;
use Auth;

use Session;

class CartController extends Controller
{
    //

    public function index(){
        $cart = session()->get('cart');
        // dd($cart);
        $subtotal = collect($cart)->sum(function($q) {
            return $q['quantity'] * $q['price'];
        });
        if(Auth::check()){
            
        $notif = Transaction_Detail::where('user_id', Auth::user()->id)->where('status', 3)->orderBy('created_at', 'DESC')->first();
        }
        // dd($subtotal);
        return view('page.cart', compact('cart', 'subtotal', 'notif'));
    }

    public function getAddToCart(Request $request){
        $id = $request->product_id;
        $qty = $request->qty;
    	$product = Items::find($id);
        // dd($id);
        if(!$product) {
 
            abort(404);
 
        }        
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) { 
            $cart = [
                    $id => [
                        "id" => $id,
                        "name" => $product->name,
                        "quantity" => $qty,
                        "price" => $product->price,
                        "photo" => $product->image
                    ]
            ]; 
            session()->put('cart', $cart);
            return redirect('/keranjang')->with('success', 'Produk telah ditambahkan ke keranjang!');
        }
            // dd(Session()->get('cart', $cart));
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) { 
            // dd(Session()->put('cart', $cart));
            return redirect()->back()->with('success', 'Produk telah ada dalam keranjang silahkan cari produk lain');
 
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $id,
            "name" => $product->name,
            "quantity" => $qty,
            "price" => $product->price,
            "photo" => $product->image
        ];
        Session()->put('cart', $cart);
        return redirect('/keranjang')->with('success', 'Produk telah ditambahkan ke keranjang!');
        
    }

    public function delete($id)
    {
        // dd($id);
        $id_cart = $id;
        $cart = session()->get('cart');
        foreach ($cart as $index => $product) {
          if ($product['id'] == $id) {
             unset($cart[$index]);
           }
        }
        session(['cart' => $cart]);
        return redirect()->back()->with('success', 'Produk sudah terhapus');
        
        // if($request->id) {
 
        //     $cart = session()->get('cart');
 
        //     if(isset($cart[$request->id])) {
 
        //         unset($cart[$request->id]);
 
        //         session()->put('cart', $cart);
        //     }
 
        //     session()->flash('success', 'Product removed successfully');
        // }
    }
}
