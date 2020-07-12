<?php

namespace App;



class Cart

{
    public $produk = nUll;
    public $satuan = 0;
    public $totalPrice = 0;

    public function __contruct($myCart){
    	if($myCart){
    		$this->produk = $myCart->produk;
    		$this->satuan = $myCart->satuan;
    		$this->totalPrice = $myCart->totalPrice;
    	}
    }

    public function add($item, $id){
    	$storeItems = ['satuan' => 0, 'price' => $item->price, 'item' => $item];
    	if ($this->produk){
    		if(array_key_exist($id, $this->produk)){
    			$storeItems = $this->produk[$id];
    		}
    	}

    	$storeItems['satuan']++;
    	$storeItems['price'] = $item->price * $storeItems['satuan'];
    	$this->produk[$id] = $storeItems;
    	$this->satuan++;
    	$this->totalPrice += $item->price;
    }


}