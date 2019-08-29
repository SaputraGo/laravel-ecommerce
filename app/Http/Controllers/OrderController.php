<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class OrderController extends Controller
{
    public function order(Request $request, $id)
    {
    	$product = Product::find($id);
    	return view('order', compact('product'));
    }
}
