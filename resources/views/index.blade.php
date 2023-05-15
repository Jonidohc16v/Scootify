<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scootify - Your Daily Ride !</title>

    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>

<style>
    nav{
    

    }
    /*Code to change color of active link*/
    .navbar-nav .active a {
        color: #34b38a;
    }
</style>

</head>

<body>
    
        <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
        <a class="navbar-brand me-10" href="/">
            <img
              src="{{asset('images/logo.png')}}"
              height="95"
              alt="Logo"
              loading="logo"
              style="margin-top: -1px; margin-left: -100px"
            />
          </a>
  
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">

           <!-- Left links -->
    <ul class="navbar-nav d-flex align-items-right me-auto mb-2 mb-lg-0" 
    style="margin-top: -1px; margin-left: 250px">
        <li class="nav-item disable">
          <a class="nav-link" href="#">How it works?</a>
        </li>
        <li class="nav-item disable">
          <a class="nav-link" href="#">Price</a>
        </li>
        <li class="nav-item disable">
          <a class="nav-link" href="#">Find a Station</a>
        </li>
        
      </ul>
      <!-- Left links -->
            
        </div>
           <div class="d-flex align-items-center"
           style="margin-top: -1px; margin-right: -100px">
          <button type="button" class="btn btn-primary me-4" style="background-color: #34b38a">
            <i class="fa-solid fa-user"></i> Login
          </button>
          <button type="button" class="btn btn-primary me-3" style="background-color: #34b38a">
            <i class="fa-solid fa-phone"></i> Contact Us
          </button>
      </div>
      <!-- Collapsible wrapper -->
      
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    "use strict";
  
    $('ul.navbar-nav > li').click(function(e) {
      e.preventDefault();
      $('ul.navbar-nav > li').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>
</body>
</html>