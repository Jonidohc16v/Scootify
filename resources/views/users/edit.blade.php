<x-layout>

    <div>

        <form id="formAccountSettings" method="POST" action="{{ route('edit.update', auth()->id()) }}"
            enctype="multipart/form-data" class="needs-validation" role="form" novalidate>
            @csrf
            <section class="mb-6"
                style="width: 70%; margin: 5rem auto 5rem; padding: 2rem; box-shadow: 0 0 20px #34b38a">
                <div style="margin-y: 20rem; background-color: #34b38a">
                    <img src="/images/logo-1.png" style="width: 6rem; border-radius:50%">
                </div>

                <!--heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Edit Information</h2>
                <!--description-->
                <p class="text-center w-responsive mx-auto mb-3">Modify your Personal Information</p>

                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-9 col-md-12 mb-md-0 mb-5 mx-auto">
                        <form id="register-form" name="register-form" action="/register" method="POST">
                            @csrf

                            <!--Full Name-->
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="md-form mb-2">
                                        <label for="name" class="form-control border border-white">
                                            <h4>Full Name</h4>
                                        </label>
                                        <input type="text" id="name" name="name"
                                            class="form-control text-center" value="{{ auth()->user()->name }}">
                                    </div>
                                </div>
                                <!-- End Full Name-->

                                <!--Email-->
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="md-form mb-2">
                                            <label for="email" class="form-control border border-white">
                                                <h4>Email</h4>
                                            </label>
                                            <input type="text" id="email" name="email"
                                                class="form-control text-center" value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>
                                </div>
                                <!--End Email-->

                                <!--Address-->
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="md-form mb-2">
                                            <label for="address" class="form-control border border-white">
                                                <h4>Address</h4>
                                            </label>
                                            <input type="text" id="address" name="address"
                                                class="form-control text-center" value="{{ auth()->user()->address }}">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Address-->

                                <!--Phone Number-->
                                <div class="col-md-6">
                                    <div class="md-form mb-2">
                                        <label for="phone_number" class="form-control border border-white">
                                            <h4>Phone Number</h4>
                                        </label>
                                        <input type="text" id="phone_number" name="phone_number"
                                            class="form-control text-center" value="{{ auth()->user()->phone_number }}">
                                    </div>
                                </div>
                            </div>
                            <!-- End Phone Number-->

                            <!--Button-->




                            <div class="text-center text-md-left mt-4">
                                <button class="btn btn-primary" id="btn" style="background-color: #34b38a" type="submit">Save
                                    Changes</button>
                                    


                                <a href="/user" class="btn btn-primary" style="background-color: #34b38a"
                                    type="submit">Cancel</a>
                            </div>




                        </form>
                    </div>



                </div>
            </section>

        </form>
    </div>
  
<script>




/* document.querySelector('#btn').disabled=true; */

</script>



</x-layout>
