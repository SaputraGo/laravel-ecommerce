@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="border-radius: 20px;">
      <div class="carousel-item active"  style="width: 100%; height: 300px; background: blue;">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item" style="width: 100%; height: 300px; background: blue; ">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item" style="width: 100%; height: 300px; background: blue; ">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="row">
    <div class="filter col-12">
        <div class="col row mx-auto my-3">
            <div class="card-body p-3 mx-2 text-center">Sort</div>
            <div class="card-body p-3 mx-2 text-center">Sort</div>
            <div class="card-body p-3 mx-2 text-center">Sort</div>
            <div class="card-body p-3 mx-2 text-center">Sort</div>
            <div class="card-body p-3 mx-2 text-center">Sort</div>
            <div class="card-body p-3 mx-2 text-center">Sort</li>
        </div>
    </div>
</div>
<div class="row">
  @foreach($data as $product)
    <div class="card m-2" style="width: 17rem;">
      <div class="card-img-top" style="max-height: 200px; overflow: hidden;">
          <img class="card-img-top" src="{{asset('img/'.$product->image)}}" alt="Card image cap">
      </div>
      <div class="card-body">
        <h5 class="card-title">T-Sirt</h5>
        <p class="card-text">{{$product->name}}</p>
        <a href="/product/{{$product->id}}/detail" class="btn btn-primary">Buy</a>
      </div>
    </div>
    @endforeach
</div>
</div>
@endsection
