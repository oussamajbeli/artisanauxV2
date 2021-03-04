@extends('master')
@section('content')

<div class="row row-cols-2 row-cols-md-3 g-3" style="margin:0 auto;padding:20px;">

        <h2 style="text-align: center; margin : 0 auto;"> Cart :</h2>
        <a style="max-height: 50px;max-width: 100px;text-align: center;margin : 0 auto;" href="order" class="btn btn-success">order now</a>
    @foreach($products as $product)
    <div class="col">

        <div class="card" style="width: 18rem; background-color:rgb(141, 184, 248);">
        <img src="{{$product->gallery}}" style="border-radius:20px;width:100px;margin:0 auto; height:100px;" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p>Category:  {{$product->category}}</p>
          <p>Price : $ {{$product->price}}</p>
          <a href="detail/{{$product->id}}" class="btn btn-primary">details</a>
          <a href="remove/{{$product->cart_id}}" class="btn btn-warning">Rmove</a>
        </div>
        
      </div>
   
       
            
    </div>
    @endforeach
    </div>
            
  </div>
 

  
@endsection