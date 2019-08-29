@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		<div class="row display-inline">
			<img src="{{asset('img/'. $product->image)}}" style="max-width: 30%">
			<div class="p-3 wrap">
				<h4 class="font-weight-bold"><span>{{$product->name}}</span></h4>
				<h5 class="my-3 font-weight-bold text-primary">Rp. {{$product->price}}</h5>
				<h6>Unit: {{$product->unit}}</h6>
				<p class="my-4">{{$product->description}}</p>
				
				<form class="col-12" action="/product/{{$product->id}}/order" method="post">
					@csrf
					<div class="form-group col-5">
						<label>Quantity</label>
						<input class="form-control col-3" placeholder="Quantity" type="number" value="1"></input>
					</div>
					<button class="btn btn-primary" style="border-radius: 30px; " type="submit"><b>Bayar Sekarang</b></button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
