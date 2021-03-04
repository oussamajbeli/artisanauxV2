@extends('master')
@section('content')

<div class="container">
    
<div class="row">
    <div class="col-sm-6">
        <img src="{{$product->gallery}}" alt="" style="width:240px;height:240px;">
        <br><br>
        <a href="{{url('product')}}" class="btn btn-secondary" style="margin: 0 auto;">Go Back</a>
        <br><br>
    </div>
    <div class="col-sm-6">
        
        <h4>Name : {{$product->name}}</h4>
       
        <p>Category : {{$product->category}}</p>
        <p>Details : {{$product->description}}</p>
        <p>Price : $ {{$product->price}}</p>
        <p style="opacity: 0.4;color:green;">Instock</p>
      <form action="/add_to_cart" method="Post">
          @csrf
        
        <input type="hidden" name="product_id" value="{{$product->id}}">

        <button class="btn btn-success" style="margin: 0 auto;">add to card</button>
      </form>
        <br><br>
        <a href="" class="btn btn-primary" style="margin: 0 auto;">Buy now</a>
    </div>
</div>
</div>

@endsection