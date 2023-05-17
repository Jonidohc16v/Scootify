
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scootify - Your Daily Ride !</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
    rel="stylesheet"
    />

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js">
    </script>

     <!--Log In -->
     <section class="mb-6" style="width: 70%; margin: 5rem auto 5rem; padding: 2rem; box-shadow: 0 0 20px #34b38a">
      <div style="margin-y: 20rem; background-color: #68d0b0">
        <img src="" style="width: 6rem">
      </div>
  
      <!--heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Log In</h2>
      <!--description-->
      <p class="text-center w-responsive mx-auto mb-5">Log In in order to have the ride of your life </p>
  
      <div class="row">
        
        <div class="col-lg-9 col-md-12 mb-md-0 mb-5 mx-auto">
          <form id="logIn-form" name="logIn-form" action="#" method="POST">
        </div>
            
  
            <!--Email-->
            <div class="row justify-content-center">
              <div class="col-md-6 ">
                <div class="md-form mb-0">
                    <label for="email" class="d-flex flex-column align-items-center text-align-center justify-content-center">Email</label>
                    <input type="text" id="email" name="email" class="form-control " style="width:100% padding:30px">
                </div>
              </div>
            </div>
           <!-- End Email-->
  
             <!-- Password-->
             <div class="row justify-content-center">
              <div class="col-md-6 ">
                    <div class="md-form mb-0">
                        <label for="password" class="d-flex flex-column align-items-center text-align-center justify-content-center">Password</label>
                        <input type="password" id="password" name="password" class="form-control" style="width: 100%">
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
        </div>
    </section>
