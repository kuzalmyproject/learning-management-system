<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<section id="header">
    
    <h2>The Open University of Sri Lanka</h2>

</section>
<section id="feature" class="section-p1">
<div class="fe-box">


<form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf

           
    <p>User Name</p>
<input type="email" name="email" placeholder="Enter your Email">

  <p>Password</p>

  
<input type="password" name="password" placeholder="Enter your Password">

<button type="submit">Login</button>
<a href="#"><h6>Forgot Password?<h6>
</form>
        </div>
</section>