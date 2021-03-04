<?php 
  use App\Http\Controllers\ProductsController;
  $total=0;
  if(Session::has('user')){
   $total=ProductsController::cartItem() ;
  }
 ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/')}}">Artisanaux</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
   
       
        
         @if(Session::has('user'))
         <li class="nav-item">
          <a class="nav-link " href="product" tabindex="-1" >Products</a>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="cartlist" tabindex="-1" >Cart({{$total}})</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="myorders">Orders</a>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           {{Session::get('user')['name']}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="logout">Logout</a></li>
            
            </ul>
          </li>
              
          @else
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">Register</a>
          </li>
             <li class="nav-item">
              <a class="nav-link" href="{{url('login')}}">Login</a>   
            </li> 
          @endif
        </ul>
        <form action="/search" class="d-flex">
          <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="search">Search</button>
        </form>
      </div>
    </div>
  </nav>
