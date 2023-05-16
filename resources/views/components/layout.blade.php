
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scootify - Your Daily Ride !</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
    rel="stylesheet"
    />

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js">
    </script>

<style>
    nav{
        text-align: center;
    }

    body{
        font-family: 'Play', sans-serif;
        
    }
    /*Code to change color of active link*/
    .navbar-nav .active a {
        color: #34b38a;
    }
  
</style>

</head>

<body class="d-flex flex-column min-vh-100">


        <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand me-5" href="/">
        <img
          src="{{asset('images/logo.png')}}"
          height="90rem"
          alt="Logo"
          loading="logo"
          id="logo"
          style="margin-top:-0.8rem; margin-bottom: -0.6rem"
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
        <ul class="navbar-nav d-flex align-items-center mx-auto mb-2 mb-lg-0" style="gap: 4rem">
          <li class="nav-item disable">
            <a class="nav-link" href="/how-it-works">
              <span class="material-symbols-outlined">
                electric_scooter
              </span> <br>
              HOW IT WORKS?</a>
          </li>
          <li class="nav-item disable">
            <a class="nav-link" href="/price">
              <span class="material-symbols-outlined">
                credit_card
              </span><br>
              PRICE</a>
          </li>
          <li class="nav-item disable">
            <a class="nav-link" href="/stations">
              <span class="material-symbols-outlined">
                location_on
              </span><br>
              FIND A STATION</a>
          </li>
        </ul>
        <!-- Left links -->

        <div class="ms-auto d-flex align-items-center">
          <button type="button" class="btn btn-primary me-3" style="background-color: #34b38a">
            <i class="fa-solid fa-user"> </i> Login
          </button>
          <button type="button" class="btn btn-primary me-3" style="background-color: #34b38a">
            <i class="fa-solid fa-phone"> </i> Contact Us
          </button>
        </div>

      </div>
      <!-- Collapsible wrapper -->

    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->


  <main>

    {{$slot}}

  </main>

<!-- CARD -->

 



  <footer class="mt-auto">

<section class="w-100">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #5ccfa9;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->

      <section class="d-flex justify-content-center gap-4">
        <p class=""><a href=""><span class="text-dark">FAQ</span></a></p>
        <p class=""><a href=""><span class="text-dark">Contact us!</span> </a></p> 
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    
    <div class="text-center d-flex justify-content-between" style="background-color: rgba(0, 0, 0, 0.2);" >
  
    <section class="p-2"><a href="/"><img src="{{asset('images/logo-1.png')}}" class="rounded" style="width:40px;" alt="logo"></a></section>

    <section class="p-1 text-center p-100">
      <!-- Facebook -->
      
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>
      </section> 

      <!-- Back to top button -->
      <section class="p-2">
        <button type="button" class="btn btn-danger btn-floating btn-lg d-flex" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
</section>
      
</div>
</section>
</footer>


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
