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




 


<main>
@if (session('error'))
  <div class="alert alert-danger">
      {{ session('error') }}
  </div>
@endif



  
      <div class="row row-cols-1 row-cols-md-3 g-4 container-fluid" style="height:30rem; width: 60%; margin:5rem auto">
          @foreach($plans as $plan)
          <div class="col">
              <div class="card h-100" style="box-shadow: 0 0 20px #34b38a" onclick="selectCard({{ $plan->id }})">
                  <div class="card-body" style="margin-top: 5%; text-align:center">
                    <span class="material-symbols-outlined mb-3" style="font-size:4rem;">
                      calendar_month
                      </span>
                      <h2 class="card-title pb-3"><b>{{ $plan->name }}</b></h2>
                      <h5>{{ $plan->description }}</h5>
                      <p style="font-size:4rem">{{ $plan->price }}€</p>
                      <hr style="font-size: 1rem; border:1px solid #34b38a;">
                      
                      <form action="{{ route('checkout', ['plan_id' => $plan->id]) }}" method="POST">
                        @csrf
                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                        <button type="submit" class="btn btn-success mt-2">Checkout</button>
                    </form>
                  </div>
              </div>
              
          </div>
          @endforeach
      </div>
      <p id="error-message" style="color: red; display: none;">Please select a subscription option.</p>
      <br>
  

</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  "use strict";

  $('ul.navbar-nav > li').onclick(function(e) {
    e.preventDefault();
    $('ul.navbar-nav > li').removeClass('active');
    $(this).addClass('active');
  });
});


setTimeout(function() {
  $('#flashMessage').fadeOut('slow');
}, 3000);


//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
scrollFunction();
};

function scrollFunction() {
if (
document.body.scrollTop > 20 ||
document.documentElement.scrollTop > 20
) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}

// script for the subscriptions
function selectCard(planId) {
  document.getElementsByName('plan_id')[0].value = planId;
}

function checkout() {
if (document.getElementById('plan_id').value === '') {
  alert('Please select a product before proceeding to checkout.');
} else {
  document.getElementById('checkout-button').type = 'submit';
}
}
</script>


</x-layout>