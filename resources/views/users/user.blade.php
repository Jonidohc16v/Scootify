<x-layout>

<style>


</style>
                    <!-- User Info -->

<div class="card mt-5 m-auto" style="width:65%; box-shadow: 0 0 20px #34b38a;">
  <div class="card-body">
  @auth
    <p class="card-title" style="font-size:2rem;"><h3>{{auth()->user()->name}}</h3></p>
    <p class="card-text">{{auth()->user()->email}}</p>
    <p class="card-text">{{auth()->user()->address}}</p>
    <p class="card-text">{{auth()->user()->phone_number}}</p>
    <a href="/edit" class="btn btn-primary" style="background-color: #34b38a">Edit</a>
    @endauth
  
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
          <ul class="card-text" style="list-style-type:none;">
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

</x-layout>
