<x-layout>


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
  <span class="material-symbols-outlined" style="font-size:5rem;">
account_circle
</span>
    <p class="card-title" style="font-size:2rem;"><h3>{{auth()->user()->name}}</h3></p>
    <p class="card-text">{{auth()->user()->email}}</p>
    <p class="card-text">{{auth()->user()->address}}</p>
    <p class="card-text">{{auth()->user()->phone_number}}</p>
    
    
  <div class="d-flex flex-row justify-content-center gap-5">

    {{-- PICK A TROTINETTE --}}

    <form action="" method="">

      @csrf
    <a href="/stations" class="btn btn-success mt-3" role="button">Pick a Scooter</a>
   
  </form>

    {{-- MY PLANS BTN --}}

    <form action="" method="">

      @csrf
    <a href="/plans" class="btn btn-info mt-3" role="button">Buy Plan</a>
   
  </form>

  {{-- EDIT USER --}}

  <a href="/edit" class="btn btn-primary mt-3" style="background-color: #34b38a">Edit</a>

    {{-- DELETE BTN --}}

    <form action="" method="">

        @csrf
      <button type="submit" class="btn btn-danger mt-3">Delete</button>

    </form>
    
    @endauth


    </div>
  </div>
</div>


                    <!-- Travels Info -->



<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-6">
      <div class="card" style="height: 400px; box-shadow: 0 0 20px #34b38a">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 2rem;">My Journeys</h5>
          <ul class="card-text" style="list-style-type:none;">
            <li></li>
          </ul>
        </div>
      </div>
    </div>

                      <!-- Payments Method -->

    <div class="col-6">
      <div class="card" style="height: 400px; box-shadow: 0 0 20px #34b38a">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 2rem;">My Payments</h5>

          <table>
         
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
