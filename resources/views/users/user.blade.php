<x-layout>


{{-- Update message --}}                   
              <div id="flashMessage">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
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
    <a href="/stations" class="btn btn-success mt-3" role="button">Rent</a>
   
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
      <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Are you sure you want to delete your account?')">Delete</button>
  </form>
    
  
  025-
    
    @endauth


    </div>
  </div>
</div>

                    <!-- My Journeys -->



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

                      <!-- Payments -->

    <div class="col-6">
      <div class="card" style="height: 400px; box-shadow: 0 0 20px #34b38a">
        <div class="card-body">
          <h5 class="card-title" style="font-size: 2rem;">My Payments</h5>
          <ul class="card-text" style="list-style-type:none;">
        <li>







</li>
          
          </ul>
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
