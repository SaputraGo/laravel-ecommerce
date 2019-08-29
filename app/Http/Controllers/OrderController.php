<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;

class OrderController extends Controller
{
    public function order(Request $request, $id)
    {
    	$product = Product::find($id);
    	$quantity = $request->has('quantity');
    	return view('order', compact('product', 'quantity'));
    }

    public function add(Request $request)
    {
    	$this->validate($request,[
    		'product' => 'required|numeric',
    		'name' => 'required',
    		'address' => 'required'
    	]);
    	
    	$getRow = Transaksi::orderBy('id', 'DESC')->get();
    	$getCount = $getRow->count();
    	$lastId = $getRow->first();
    	$kode = 'TR00001';
    	
    	if($rowCount > 0){
    		if ($lastId->id < 9) {
    			$kode = 'TR0000'.''.($lastId->id +1);
    		}else if($lastId->id < 99){
    			$kode = 'TR000'.''.($lastId->id +1);
    		}else if($lastId->id < 999){
    			$kode = 'TR00'.''.($lastId->id +1);
    		}else if($lastId->id < 9999){
    			$kode = 'TR0'.''.($lastId->id +1);
    		}else if($lastId->id < 99){
    			$kode = 'TR'.''.($lastId->id +1);
    		}
    	}

    	// Order::create([
    	// 	'kode' => $kode,
    	// 	'product' => '$request->product',
    	// 	'user' => Auth::user()->id,
    	// 	'quantity' => $request->quantity,
    	// 	'address' => $request->address,
    	// 	'status' => 'belum_bayar'
    	// ]);
    	Order::create([
    		'kode' => $kode,
    		'product' => 1,
    		'user' => 1,
    		'quantity' => 2,
    		'address' => 'dfhds',
    		'status' => 'belum_bayar'
    	]);
    	return redirect('/');
    }
}
