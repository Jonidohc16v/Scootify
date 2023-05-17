<x-layout>
    <!--Section: Contact v.2-->
    <section class="mb-6" style="width: 70%; margin: 5rem auto 5rem; padding: 2rem; box-shadow: 0 0 20px #34b38a">
      <div style="margin-y: 20rem; background-color: #34b38a">
        <img src="/images/logo-1.png" style="width: 6rem; border-radius:50%">
      </div>
      <div id="flashMessage">
        @if(Session::has('success'))
              <div class="alert alert-success" >
                  {{Session::get('success')}}
              </div>
        @endif
      </div>
      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly.
        Our team will come back to you as soon as possible.</p>
  
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-9 col-md-12 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="/contactus" method="POST">
            @csrf
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="name" name="name" class="form-control">
                  <label for="name" class="">Your Full Name</label>
                </div>
              </div>
              <!--Grid column-->
  
              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="email" name="email" class="form-control">
                  <label for="email" class="">Your email</label>
                </div>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
  
            <!--Grid row-->
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input type="text" id="subject" name="subject" class="form-control">
                  <label for="subject" class="">Subject</label>
                </div>
              </div>
            </div>
            <!--Grid row-->
  
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-md-12">
                <div class="md-form">
                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                  <label for="message">Your message</label>
                </div>
              </div>
            </div>
            <!--Grid row-->
  
            <div class="text-center text-md-left mt-4">
              <button class="btn btn-primary" style="background-color: #34b38a" type="submit"> 
                <section style="display: flex; justify-content:space-between">
                  <span style="font-size: 1rem"> Send </span>
                  <span class="material-symbols-outlined">
                    send
                  </span> 
                </section>                                            
              </button>
            </div>
            <div class="status"></div>
          </form>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-3 col-md-12 text-center">
          <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
              <p>7 Porte de France, L-4360 ESCH-SUR-ALZETTE, Luxembourg</p>
            </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 352 234 567 891</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@scootify.lu</p>
                </li>
            </ul>
        </div>
        
        <div class="row">
            <h4 class=" mb-3"><i class="fa-regular fa-clock"></i>
            Opening Hours
            </h4>
            <div class="d-flex justify-content-center mb-1">
              <p class="text-secondary fw-bold mb-0 me-5">Mon - Fri</p>
              <p class="text-secondary mb-0">9am - 5pm</p>
            </div>
            <div class="d-flex justify-content-center">
              <p class="text-secondary fw-bold mb-0 me-5">Sat</p>
              <p class="text-secondary mb-0">9am - 2pm</p>
            </div>
          </div>
          
    </section>
<!--Section: Contact v.2-->
</x-layout>