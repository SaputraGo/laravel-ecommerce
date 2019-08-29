@extends('layouts.master')

@section('cari')
<form class="px-5 col" style="margin-left: 76px;"><input type="search" name="cari" class="form-control" style="border-radius: 15px" placeholder="Search here.."></form>
@endsection

@section('content')
<div class="container">
	<div class="row  my-4">
		<h3 class="title text-muted">Product</h3>
		<a href="/product/create" class="btn bg btn-round ml-auto px-3 text-white">Create</a>
	</div>
	<table class="table table-borderless">
		<thead>
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Price</th>
				<th>Unit</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $product)
			<tr>
				<td class="align-middle"><img src="{{asset('img/'. $product->image)}}" style="width: 60px; height: 60px;" /></td>
				<td class="align-middle">{{$product->name}}</td>
				<td class="align-middle">{{$product->price}}</td>
				<td class="align-middle">{{$product->unit}}</td>
				<td class="align-middle">
					<a id="navbarDropdown" class="btn bg text-white nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Action <span class="caret"></span>
                    </a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/product/{{$product->id}}/view">Lihat</a>
                        <a class="dropdown-item" href="/product/{{$product->id}}/edit">Edit</a>
                        <a class="dropdown-item" href="/product/{{$product->id}}/delete">Delete</a>
                    </div>	
                </td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$data->links()}}
</div>
@endsection