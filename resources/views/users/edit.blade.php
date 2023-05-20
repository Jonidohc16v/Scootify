<x-layout>
   
<!-- <form 
        id="formAccountSettings" 
        method="POST" 
        action="{{ route('edit.update',auth()->id()) }}" 
        enctype="multipart/form-data"
        class="needs-validation" 
        role="form"
        novalidate
    >
    @csrf
    @method('PUT') -->
    <!-- <div class="card-body">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="name" class="form-label">{{ trans('sentence.name')}}</label>
                <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" required>
                <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
            </div>
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">{{ trans('sentence.email')}}</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="john.doe@example.com">
                <div class="invalid-tooltip">{{ trans('sentence.required')}}</div>
            </div>
            <div class="mt-2">
                <button type="submit" class="button-create me-2">{{ trans('sentence.save_changes')}}</button>
            </div>
        </div>
    </div>
</form>  -->




<div>

<form 
        id="formAccountSettings" 
        method="POST" 
        action="{{ route('edit.update',auth()->id()) }}" 
        enctype="multipart/form-data"
        class="needs-validation" 
        role="form"
        novalidate
    >
    @csrf
        <section class="mb-6" style="width: 70%; margin: 5rem auto 5rem; padding: 2rem; box-shadow: 0 0 20px #34b38a">
            <div style="margin-y: 20rem; background-color: #34b38a">
                <img src="/images/logo-1.png" style="width: 6rem; border-radius:50%">
            </div>
  
      <!--heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Edit Information</h2>
      <!--description-->
      <p class="text-center w-responsive mx-auto mb-5">Modify your Personal Information</p>
  
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-9 col-md-12 mb-md-0 mb-5 mx-auto">
            <form id="register-form" name="register-form" action="/register" method="POST">
                @csrf
    
                <!--Full Name-->
                <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="name" class="form-control">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{auth()->user()->name}}">
                    </div>
                </div>
                <!-- End Full Name-->
    
                <!--Email-->
                    <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="email" class="form-control">Email</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{auth()->user()->email}}">
                        </div>
                    </div>
                    </div>
                <!--End Email-->

                <!--Address-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="address" class="form-control">Address</label>
                            <input type="text" id="address" name="address" class="form-control" value="{{auth()->user()->address}}">
                        </div>
                    </div>
                </div>
                <!-- End Address-->

                   <!--Phone Number-->
                   <div class="col-md-6">
                    <div class="md-form mb-0">
                        <label for="phone_number" class="form-control">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" class="form-control" value="{{auth()->user()->phone_number}}">
                    </div>
                </div>
                </div>
                <!-- End Phone Number-->
    
                <!--Button-->
                <div class="text-center text-md-left mt-4">
                <button class="btn btn-primary" style="background-color: #34b38a" type="submit">Save Changes</button>
                <a href="/user" class="btn btn-primary" style="background-color: #34b38a" type="submit">Cancel</a>
                </div>
               
            </form>
        </div>
        

    
        </div>   
    </section>

    </form>
</div>

</x-layout>