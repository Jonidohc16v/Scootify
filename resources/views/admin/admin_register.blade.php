<x-layout>

   <div>
        <section class="mb-6" style="width: 70%; margin: 5rem auto 5rem; padding: 2rem; box-shadow: 0 0 20px #34b38a">
            <div style="margin-y: 20rem; background-color: #34b38a">
                <img src="/images/logo-1.png" style="width: 6rem; border-radius:50%">
            </div>
  
      <!--heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Sign Up</h2>
      <!--description-->
      <p class="text-center w-responsive mx-auto mb-5">Register in order to have all our services.</p>
  
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-9 col-md-12 mb-md-0 mb-5 mx-auto">
          <form id="register-form" name="register-form" action="/register/admin" method="POST">
            @csrf
  
            <!--Full Name-->
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="md-form mb-0">
                    <label for="name" class="">Full Name</label>
                    <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control">
                    @error('name')
                    <p class="text-danger text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
              </div>
              <!-- End Full Name-->
  
              <!--Phone Number-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                    <label for="phone_number" class="">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" value="{{old('phone_number')}}" class="form-control">
                    @error('phone_number')
                    <p class="text-danger text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
              </div>
            </div>
            <!-- End Phone Number-->
  
            <!--Email-->
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="md-form mb-0">
                    <label for="email" class="">Email</label>
                    <input type="text" id="email" name="email" value="{{old('email')}}" class="form-control">
                    @error('email')
                    <p class="text-danger text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
              </div>
            </div>
            <!--End Email-->

            <!--Password-->
        <div class="row">
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <label for="password" class="">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                    @error('password')
                    <p class="text-danger text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <!--End Password-->

            <!--Confirm Password-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <label for="password_confirmation" class="">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                    @error('password_confirmation')
                    <p class="text-danger text-sm mt-1">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <!-- End Confirm Password-->

            <!--Address-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <label for="address" class="">Address</label>
                        <input type="text" id="address" name="address" value="{{old('address')}}" class="form-control">
                        @error('address')
                        <p class="text-danger text-sm mt-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- End Address-->
  
            <!--Button-->
            <div class="text-center text-md-left mt-4">
              <button class="btn btn-primary" style="background-color: #34b38a" type="submit">Sign Up</button>
            </div>
            <div class="status"></div>
          </form>
        </div>
        

    
            <div class="card-footer text-center">
                <p style="padding-top:15px">Are you a member? <a href="login">Sign In</a></p>
                <p>By clicking <em>Sign Up</em> you agree to our <a href="#">terms of service</a></p>
            </div>
        </div>   
    </section>
</div>

</x-layout>