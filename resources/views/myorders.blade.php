@extends('master')
@section('content')

<div class="row row-cols-2 row-cols-md-3 g-3" style="margin:0 auto;padding:20px;">

        <h2 style="text-align: center; margin : 0 auto;">My orders :  </h2>
    @foreach($orders as $order)
    <div class="col">

        <div class="card" style="width: 18rem; background-color:rgb(141, 184, 248);">
        <img src="{{$order->gallery}}" style="border-radius:20px;width:100px;margin:0 auto; height:100px;" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$order->name}}</h5>
          <p>Delivery status:  {{$order->status}}</p>
          <p>Address : {{$order->email}}</p>
          <b >Payment Status: {{$order->payment_status}}</b>
          <b >Payment Method: {{$order->payment_method}}</b>
        </div>
        
      </div>
   
       
            
    </div>
    @endforeach
    </div>
            
  </div>
 

  
@endsection