<x-layout>
  <style>
    @media only screen and (max-width: 768px) {
      #btnContainer {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }

      /* .container {
        margin-right: auto;
        margin-left: auto;
      } */

      #journeysContainer,
      #paymentsContainer {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .card {
        font-size: 10px;
        width: 200px;
      }
    }
  </style>

  {{-- Update message --}}
  <div id="flashMessage">
    @if(session()->has('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif
  </div>

  <!-- User Info -->

  <div class="card mt-5 m-auto" style="width:65%; box-shadow: 0 0 20px #34b38a;">
    <div class="card-body">
      @auth
      <span class="material-symbols-outlined" style="font-size:4rem;">
        account_circle
      </span>
      <p class="card-title" style="font-size:2rem;">
        <h3>{{auth()->user()->name}}</h3>
      </p>
      <p class="card-text">{{auth()->user()->email}}</p>
      <p class="card-text">{{auth()->user()->address}}</p>
      <p class="card-text">{{auth()->user()->phone_number}}</p>

      <div class="d-flex flex-row justify-content-center gap-5" id="btnContainer">
        {{-- PICK A TROTINETTE --}}
        <form action="" method="">
          @csrf
          <a href="/ride" class="btn btn-success mt-3" role="button">Ride</a>
        </form>

        {{-- MY PLANS BTN --}}
        <form action="" method="">
          @csrf
          <a href="/plans" class="btn btn-info mt-3" role="button">Buy Plan</a>
        </form>

        {{-- EDIT USER --}}
        <a href="/edit" class="btn btn-primary mt-3" style="background-color: #34b38a">Edit</a>

        {{-- DELETE BTN --}}
        <form action="{{ route('users.destroy') }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger mt-3"
            onclick="return confirm('Are you sure you want to delete your account?')">Delete</button>
        </form>
      </div>

      @endauth
    </div>
  </div>

  <!-- My Journeys -->

  <div class="container mt-5 mb-5">
    <div class="row mt-5 mb-5">
      <div class="col-12 col-sm-6 mb-5" id="journeysContainer">
        <div class="card" style="height: 400px; box-shadow: 0 0 20px #34b38a">
          <div class="card-body d-flex flex-column" id="title">
            <h5 class="card-title" id="title" style="font-size: 2rem;">My Journeys</h5>
            <ul class="card-text" style="list-style-type:none;">
              <li></li>
            </ul>
          </div>
        </div>
      </div>



                      <!-- Payments -->

    <div class="col-12 col-sm-6 mb-5"  id="paymentsContainer">
      <div class="card" style="height: 400px; box-shadow: 0 0 20px #34b38a">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title mb-3" id="titleTwo" style="font-size: 2rem;">My Payments</h5>

          <table id="tcol"> 
         
            @forelse(auth()->user()->subscriptions as $subscription)
            
                <thead>
                    <tr>
                        <th>Plan Name</th>
                        <th>Subscribtion Date</th>
                        <th>Due Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $subscription->plan->name }}</td>
                        <td>{{ substr($subscription->created_at, 0, 10) }}</td>
                        <td>{{substr($subscription->ends_at, 0, 10)}}</td>
                 
                    </tr>
                </tbody>
            
            @empty
              <p>No subscriptions found</p>
             @endforelse
             
         </table>
         
        </div>
      </div>
    </div>
  </div>
</div>


<script>
setTimeout(function() {
  $('#flashMessage').fadeOut('slow');
}, 3000);
</script>

</x-layout>
