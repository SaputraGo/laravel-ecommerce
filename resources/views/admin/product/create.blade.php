@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row my-4">
		<h3 class="title text-muted">Create Product</h3>
		<a class="btn btn-light ml-auto px-4 btn-round" href="/product">Back</a>
	</div>
	<form method="POST" enctype="multipart/form-data" action="/product/add">
		@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input class="form-control input-data" type="text" name="name" id="name" value="{{old('name')}}"></input>
			@if($errors->has('name'))
				<p class="text-danger">{{$errors->first('name')}}</p>
			@endif
		</div>
		<div class="row">
			<div class="form-group col">
				<label for="price">Price</label>
				<input class="form-control input-data" type="number" name="price" id="price" value="{{old('price')}}"></input>
				@if($errors->has('price'))
					<p class="text-danger">{{$errors->first('price')}}</p>
				@endif
			</div>
			<div class="form-group col">
				<label for="unit">Unit</label>
				<input class="form-control input-data" type="number" name="unit" id="unit" value="{{old('unit')}}"></input>
				@if($errors->has('unit'))
					<p class="text-danger">{{$errors->first('unit')}}</p>
				@endif
			</div>
		</div>
		<div class="form-group">
			<label for="image">Image</label>
			<input class="form-control-file" type="file" name="image" id="image"></input>
			@if($errors->has('image'))
				<p class="text-danger">{{$errors->first('image')}}</p>
			@endif
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<textarea class="input-data form-control-file" name="description" id="description" rows="4">{{old('description')}}</textarea>
		</div>
		<div class="row">
			<button type="submit" class="btn bg text-white py-2 px-4 btn-round">Submit</button>
			<button type="reset" class="btn btn-danger py-2 px-4 btn-round mx-3">Reset</button>	
		</div>
	</form>
</div>
@endsection
