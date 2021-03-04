@extends('master')
@section('content')

<div class="row row-cols-2 row-cols-md-3 g-3" style="margin:0 auto;padding:20px;">
    <h1 style="color: green; text-align: center; margin:0 auto;">Order List</h1>
    <table class="table">
        <thead>
          <tr>
           
            <th scope="col">Price</th>
            <th scope="col">Delivery</th>
            <th scope="col">Tax</th>
            <th scope="col">Total Ammount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
            <td>$ {{$total}}</td>
            <td>$ 10</td>
            <td>$ 0</td>
            <td>$ {{$total+10}}</td>
          </tr>
         
        </tbody>
      </table>
            
  </div>
  <br>
 <div class="col-sm-6" style="margin:0 auto; border: 2px solid rgb(119, 231, 119);border-radius: 5px;"> 
    <form action="orderplace" method="Post">
        @csrf
        <fieldset style="padding: 10px;">
          <legend style="text-align:center;color:rgb(66, 212, 66)">Payment protocol</legend>
          <div class="mb-3">
            <label  class="form-label"> email address</label>
            <input type="text" name="address" class="form-control" placeholder=" enter email address">
          </div>
          <div class="mb-3">
            <label  class="form-label">payment method</label>
            <div  class="mb-3">
            <option> </option>
              <input type="radio" value="cash" name="payment"> <span>online</span><br><br>
              <input type="radio" value="cash" name="payment"><span> EMI</span><br><br>
              <input type="radio" value="cash" name="payment"><span> on delivery</span><br><br>            </div>
          </div>
        
          <button  type="submit" class="btn btn-primary">ORDER</button>
        </fieldset>
      </form>
 </div>

  
@endsection