@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Lengkapi Data Pengiriman</h3>
	<div class="card my-3">
		<h3>{{$product->name}}</h3>
	</div>
	<form method="post" action="/order/tambah">
		@csrf
		<input type="hidden" name="product" class="form-control" value="{{$product->id}}">
		<input type="hidden" name="quantity" class="form-control" value="{{$quantity}}">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form-control" value="{{Auth::user()->name}}">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="address" class="form-control" placeholder="Alamat Lengkap"></textarea>
		</div>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
@endsection