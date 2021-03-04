<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="jquery/jquery-3.5.1.js"></script>
</head>
<body>
  
    {{view('header')}}


    <h1 class="text-center " style="border-top-left-radius: 50px;height:300px;background-color:rgb(181, 235, 181);border-bottom-right-radius: 50px;">Hello are you looking for artisanal products?<br> this is the largest market place that gives you the newest home made sells .<br> take a trip and buy something...</h1>


    @yield('content')
   

    {{view('footer')}}

</body>
<style>
  
  
   
</style>

</html> 