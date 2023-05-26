<x-layout>
  <style>
  body{
      font-family: 'Play', sans-serif;
      text-align: center;
  }
  
  /*Code to change color of active link*/
  .navbar-nav li a {
  color: black;
  }
  .navbar-nav li.active a {
  color: #34b38a;
  }
  
  .selected {
      transform: scale(1.05);
      border: 2px solid #34b38a;
  }
</style>

    main {
      padding-bottom: 50px;
    }


<body class="d-flex flex-column min-vh-100">


    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<!-- Container wrapper -->
<div class="container-fluid">
  <!-- Navbar brand -->
  <a class="navbar-brand me-5" href="/index">
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
    <ul class="navbar-nav d-flex align-items-center mx-auto mb-2 mb-lg-0" style="gap: 4rem;">
      <li class="nav-item">
        <a class="nav-link" href="/how-it-works">
          <span class="material-symbols-outlined">
            electric_scooter
          </span> <br>
          HOW IT WORKS?</a>
      </li>
      @auth
          <li class="nav-item">
            <a class="nav-link" href="/plans">
              <span class="material-symbols-outlined">
                credit_card
              </span><br>
              PLANS</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/price">
              <span class="material-symbols-outlined">
                credit_card
              </span><br>
              PRICE</a>
          </li>
          @endauth
      <li class="nav-item">
        <a class="nav-link" href="/stations">
          <span class="material-symbols-outlined">
            location_on
          </span><br>
          FIND A STATION</a>
      </li>
      @auth
          <li class="nav-item">
            <a class="nav-link" href="/ride">
              <span class="material-symbols-outlined">
                star
              </span><br>
              GET A RIDE</a>
          </li>
          @endauth
    </ul>
    <!-- Left links -->



<body class="d-flex flex-column min-vh-100">


 


<main>
@if (session('error'))
  <div class="alert alert-danger">
      {{ session('error') }}
  </div>
@endif

    <div class="row row-cols-1 row-cols-md-3 g-4 container-fluid">
      @foreach($plans as $plan)
        <div class="col">
          <div class="card h-100" style="box-shadow: 0 0 20px #34b38a" onclick="selectCard({{ $plan->id }})">
            <div class="card-body" style="margin-top: 5%; text-align:center">
              <span class="material-symbols-outlined mb-3" style="font-size: 4rem;">
                calendar_month
              </span>
              <h2 class="card-title pb-3"><b>{{ $plan->name }}</b></h2>
              <h5>{{ $plan->description }}</h5>
              <p style="font-size: 4rem">{{ $plan->price }}€</p>
              <hr style="font-size: 1rem; border: 1px solid #34b38a;">
              <form action="{{ route('checkout', ['plan_id' => $plan->id]) }}" method="POST">
                @csrf
                <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                <button type="submit" class="btn btn-success mt-2" style="background-color: #34b38a;">Checkout</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <p id="error-message" style="color: red; display: none;">Please select a subscription option.</p>
    <br>
  </main>
</x-layout>
