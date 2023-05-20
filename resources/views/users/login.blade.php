
<x-layout>
     <!--Log In -->
     <section class="mb-6" style="width: 70%; margin: 5rem auto 5rem; padding: 2rem; box-shadow: 0 0 20px #34b38a">
      <div style="margin-y: 20rem; background-color: #34b38a">
        <img src="/images/logo-1.png" style="width: 6rem; border-radius:50%">
      </div>
  
      <!--heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Log In</h2>
      <!--description-->
      <p class="text-center w-responsive mx-auto mb-5">Log In in order to have the ride of your life </p>
  
      <div class="row">
        
        <div class="col-lg-9 col-md-12 mb-md-0 mb-5 mx-auto">
          <form id="logIn-form" name="logIn-form" action="/login" method="POST">
        </div>
        @csrf
            
  
            <!--Email-->
            <div class="row justify-content-center">
              <div class="col-md-6 ">
                <div class="md-form mb-0">
                    <label for="email" class="d-flex flex-column align-items-center text-align-center justify-content-center">Email</label>
                    <input type="text" id="email" name="email" class="form-control" style="width: 100%;">
                </div>
              </div>
            </div>
           <!-- End Email-->
  
             <!-- Password-->
             <div class="row justify-content-center">
              <div class="col-md-6 ">
                    <div class="md-form mb-0">
                        <label for="password" class="d-flex flex-column align-items-center text-align-center justify-content-center">Password</label>
                        <input type="password" id="password" name="password" class="form-control" style="width: 100%;">
                    </div>
                </div>
            </div>

           
            <!--log In button-->
            <div class="text-center text-md-left mt-4">
              <button class="btn btn-primary" style="background-color: #34b38a" type="submit">Log In</button>
            </div>
            <div class="status"></div>
          </form>
        </div>
         <!-- End log In button-->
            <div class="card-footer text-center">
                <p style="padding-top:15px">Still not a member? <a href="register">Sign Up</a></p>
            </div>
          </form>
        </div>
    </section>
</x-layout>