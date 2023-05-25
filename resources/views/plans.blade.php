<x-layout>
  <style>
    body {
      font-family: 'Play', sans-serif;
      text-align: center;
      margin: 0;
      padding: 0;
    }

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

    main {
      padding-bottom: 50px;
    }

    .card {
      margin: 50px;
    }


    @media (max-width: 768px) {
      main {
        padding-top: 20px;
      }

      .container-fluid {
        width: 90%;
        margin: 0 auto;
      }
    }
  </style>

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
