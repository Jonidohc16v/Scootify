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
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
</head>
<body class="d-flex flex-column min-vh-100">
    
<main>

    {{$slot}}

</main>

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
  
    <section class="p-2"><p><img src="{{asset('images/logo-1.png')}}" class="rounded" style="width:40px;" alt="logo"></p></section>

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
</body>
</html>