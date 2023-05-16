<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Prices</title>

            <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
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
          src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
        ></script>
        
        <style>
            body{
                font-family: 'Play', 'sans-serif';
                text-align: center;
            }
        </style>
    </head>
    <body>
        <main style="text-align:center">
            {{$slot}}
        </main>
        <div class="row row-cols-1 row-cols-md-3 g-4 container-fluid" style="height:30rem; width: 60%; margin: 2rem auto">
            <div class="col">
              <div class="card h-100" style="box-shadow: 0 0 20px #34b38a">
                <div class="card-body" style="margin-top: 45%; text-align:center">
                  <h2 class="card-title pb-3"><b>Daily</b></h2>
                  <h5> 24h of pure fun with our e-scooters </h5>
                  <p style="font-size:4rem">5€</p>   
                  <hr style="font-size: 1rem; border:1px solid #34b38a;">               
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="box-shadow: 0 0 20px #34b38a">
                <div class="card-body" style="margin-top: 45%; text-align:center">
                  <h2 class="card-title pb-3"><b>Monthly</b></h2>
                  <h5> Enjoy your e-scooter journey for one month </h5>
                  <p style="font-size:4rem">15€</p>
                  <hr style="font-size: 1rem; border:1px solid #34b38a;"> 
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100" style="box-shadow: 0 0 20px #34b38a">
                <div class="card-body" style="margin-top: 45%; text-align: center">
                  <h2 class="card-title pb-3"><b>Yearly</b></h2>
                  <h5> A whole year of care free and pure enjoyment! </h5>
                  <p style="font-size:4rem">50€</p>
                  <hr style="font-size: 1rem; border:1px solid #34b38a;"> 
                </div>
              </div>
            </div>          
        </div>
        <button type="button" class="btn btn-primary me-3" style="background-color: #34b38a">
            <i class="fa-solid fa-user"> </i> Subscribe
        </button>
    </body>
</html>