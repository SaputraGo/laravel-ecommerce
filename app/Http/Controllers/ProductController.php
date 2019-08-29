<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$data = Product::paginate(5);
    	return view('admin.product.index', compact('data'));
    }

    public function create()
    {
    	return view('admin.product.create');
    }

    public function add(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|string|min:5',
    		'price' => 'required|numeric|min:1',
    		'unit' => 'required|numeric|min:1',
    		'image' => 'mimes:jpg,jpeg,png',
    	]);
    	$product = Product::create($request->all());
    	if ($request->hasFile('image')) {
    		$nama = time() .'_'. $request->file('image')->getClientOriginalName();
    		$request->file('image')->move('img', $nama);
    		$product->image = $nama;
    	}
    	$product->save();
    	return redirect('/product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request , $id)
    {
        $this->validate($request, [
            'name' => 'required|string|min:5',
            'price' => 'required|numeric|min:1',
            'unit' => 'required|numeric|min:1',
            'image' => 'mimes:jpg,jpeg,png',
        ]);
        $product = Product::find($id);
        if($request->hasFile('image')){
            $nama = time() .'_'. $request->file('image')->getClientOriginalName();
            $request->file('image')->move('img', $nama);
            $image = $nama;   
        }else{
            $image = $product->image;   
        }

        $product->update([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'unit' => $request->get('unit'),
            'image' => $image,
        ]);
        return redirect('/product');
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect('/product');
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('client.item', compact('product'));
    }
}
