@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Lengkapi Data Pengiriman</h3>
	<div class="card my-3">
		<h3>klhgfnjkg layouts Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
	</div>
	<form method="post" action="/order/add">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form-control" value="{{Auth::user()->name}}">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="nama" class="form-control" placeholder="Alamat Lengkap"></textarea>
		</div>
	</form>
</div>
@endsection