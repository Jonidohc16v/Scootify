<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scootify - Your Daily Ride !</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>

    <!-- Include polyfill library for browser compatibility
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>-->

    <style>
        html,
        body {
            font-family: 'Play', sans-serif;
            text-align: center;
            height: 100%;
        }

        #map {
            height: 70%;
            width: 70%;
            margin: 5% auto;
        }

        #search {
            margin-top: 10px;
            margin-bottom: 10px;
            width: 300px;

        }

        .custom-marker {
            width: 32px;
            height: 32px;
        }

        .custom-marker img {
            width: 100%;
            height: 100%;
        }


        /*Code to change color of active link*/
        .navbar-nav li a {
            color: black;
        }

        .navbar-nav li.active a {
            color: #34b38a;
        }

        #photo {
            width: 300px;
            height: 300px;
        }
    </style>

</head>


<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand me-5" href="/index">
                <img src="{{ asset('images/logo.png') }}" height="90rem" alt="Logo" loading="logo" id="logo"
                    style="margin-top:-0.8rem; margin-bottom: -0.6rem" />
            </a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">

                <!-- Left links -->
                <ul class="navbar-nav d-flex align-items-center mx-auto mb-2 mb-lg-0" style="gap: 4rem;">
                    <li class="nav-item">
                        <a class="nav-link" href="/how-it-works">
                            <span class="material-symbols-outlined">
                                electric_scooter
                            </span> <br>
                            HOW IT WORKS?</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/plans">
                                <span class="material-symbols-outlined">
                                    credit_card
                                </span><br>
                                PLANS</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/price">
                                <span class="material-symbols-outlined">
                                    credit_card
                                </span><br>
                                PRICE</a>
                        </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="/stations">
                            <span class="material-symbols-outlined">
                                location_on
                            </span><br>
                            FIND A STATION</a>
                    </li>
                </ul>
                <!-- Left links -->

                <!-- Logout button -->
                <div class="ms-auto d-flex align-items-center">
                    @auth
                        <a href="/user">
                            <span class="font-bold uppercase" style="color: black; margin-right:35px;">
                                Welcome {{ auth()->user()->name }}
                            </span>
                        </a>
                        <form class="inline" method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="btn btn-primary me-3" style="background-color: #9b2b1e">>
                                <i class="fa-solid fa-door-closed"></i>
                                Log Out
                            </button>
                        </form>
                    @else
                        <a href="/login">
                            <button type="button" class="btn btn-primary me-3" style="background-color: #34b38a">
                                <i class="fa-solid fa-user"> </i> Login
                            </button>
                        </a>
                    @endauth

                    <a href="/contactus">
                        <button type="button" class="btn btn-primary me-3" style="background-color: #34b38a">
                            <i class="fa-solid fa-phone"> </i> Contact Us
                        </button>
                    </a>
                </div>

            </div>
            <!-- Collapsible wrapper -->

        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div style="height:100%">
        <!-- Search input and button -->
        <input type="text" id="search" placeholder="Search for a location">
        <button onclick="searchLocation()" style="width: 8%;">Search</button>

        <!-- Map container -->
        <div id="map"></div>
    </div>


    <footer class="mt-auto">
        <section class="w-100">
            <!-- Footer -->
            <footer class="text-center text-white" style="background-color: #5ccfa9;">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                    <!-- Section: CTA -->

                    <section class="d-flex justify-content-center gap-4">
                        <p class=""><a href="/faq"><span class="text-dark">FAQ</span></a></p>
                        <p class=""><a href="/contactus"><span class="text-dark">Contact us!</span> </a></p>
                    </section>
                    <!-- Section: CTA -->
                </div>
                <!-- Grid container -->


                <div class="text-center d-flex justify-content-between" style="background-color: rgba(0, 0, 0, 0.2);">

                    <section class="p-2"><a href="/index"><img src="{{ asset('images/logo-1.png') }}"
                                class="rounded" style="width:40px;" alt="logo"></a></section>

                    <section class="p-1 text-center p-100">
                        <!-- Facebook -->

                        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                            data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                            data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-link btn-floating btn-lg text-dark m-1"
                            href="https://www.instagram.com/scootify.lux/" role="button"
                            data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
                    </section>

                    <!-- Back to top button -->
                    <section class="p-2">
                        <button type="button" class="btn btn-danger btn-floating btn-lg d-flex shadow-none"
                            id="btn-back-to-top" style="background-color:black; opacity:0.7;">
                            <i class="fas fa-arrow-up"></i>
                        </button>
                    </section>

                </div>
        </section>
    </footer>

    <!-- Load Google Maps API with the provided key and libraries -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxuiJOaKoWJuMd77szJL47mfJPiqMT2yM&libraries=places&callback=initMap"
        async defer></script>
    {{-- AIzaSyAxuiJOaKoWJuMd77szJL47mfJPiqMT2yM --}}

    <script>

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

      let map;
      let markers = [];

      function initMap() {
          // Set initial map position to Luxembourg
          const luxembourgLatLng = {
              lat: 49.6116,
              lng: 6.13
          };
          map = new google.maps.Map(document.getElementById("map"), {
              zoom: 12,
              center: luxembourgLatLng,
          });

          // Get location data from the server-side and assign to JavaScript variable
          const locations = {!! json_encode($locations) !!};
          const infowindow = new google.maps.InfoWindow();

          // Iterate over locations and create markers
          locations.forEach(location => {
              const {
                  id,
                  name,
                  address,
                  lat,
                  lon,
                  capacity,
                  photo,
                  user_id,
                  escooters_id,
                  created_at,
                  updated_at
              } = location;

              // Create a marker for each location
              const marker = new google.maps.Marker({
                  position: new google.maps.LatLng(lat, lon),
                  map: map,
                  icon: {
                      url: '/images/escooter-icon-1.png',
                      scaledSize: new google.maps.Size(48, 48)
                  }
              });

              // Add click event listener to each marker
              google.maps.event.addListener(marker, 'click', () => {
                  const content = `
          <div>
            <h3>${name}</h3>
            <p>ID: ${id}</p>
            <p>Address: ${address}</p>
            <p>Latitude: ${lat}</p>
            <p>Longitude: ${lon}</p>
            <p>Capacity: ${capacity}</p>
            <p>User ID: ${user_id}</p>
            <p>Escooters ID: ${escooters_id}</p>
            <p>Created At: ${created_at}</p>
            <p>Updated At: ${updated_at}</p>
            <img id="photo" src="/images/${photo}" alt="photo">
          </div>
        `;
                  infowindow.setContent(content);
                  infowindow.open(map, marker);
              });


          });

          // Set up autocomplete for search input field using the Places API
          const searchInput = document.getElementById('search');
          const autocomplete = new google.maps.places.Autocomplete(searchInput);
          // Get user's current location if supported by the browser
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(
                  position => {
                      const userLatLng = {
                          lat: position.coords.latitude,
                          lng: position.coords.longitude
                      };
                      // Set map center to user's location
                      map.setZoom(14);
                      map.setCenter(userLatLng);
                      // Add a marker for the user's location
                      const userMarker = new google.maps.Marker({

                          position: userLatLng,
                          map: map,
                          icon: {
                              url: '/images/user-icon-3.png',
                              scaledSize: new google.maps.Size(48, 48)
                          }
                      });


                      // Bias the autocomplete results to the user's current location
                      autocomplete.setBounds(map.getBounds());
                  },
                  error => {
                      console.error('Error getting current location:', error);
                  }
              );
          } else {
              console.error('Geolocation is not supported by this browser.');
          }

          // Listen for place selection from autocomplete and add a marker to the selected location
          autocomplete.addListener('place_changed', () => {
              const place = autocomplete.getPlace();
              if (!place.geometry) {
                  console.error('No location selected.');
                  return;
              }

              map.setCenter(place.geometry.location);

              // Add a marker to the selected location
              new google.maps.Marker({
                  position: place.geometry.location,
                  map,
              });
          });
      }

      function searchLocation() {
          const searchInput = document.getElementById('search');
          const query = searchInput.value;
          const geocoder = new google.maps.Geocoder();

          // Geocode the entered address and add a marker to the searched location
          geocoder.geocode({
              address: query
          }, (results, status) => {
              if (status === 'OK') {
                  const location = results[0].geometry.location;

                  // Clear previous markers
                  mapMarkers.forEach(marker => marker.setMap(null));
                  mapMarkers = [];

                  // Set map center to the searched location
                  map.setCenter(location);

                  // Add a marker to the searched location
                  const marker = new google.maps.Marker({
                      position: location,
                      map: map,
                      icon: {
                          url: 'images/escooter-icon-3.png',
                          scaledSize: new google.maps.Size(64, 64)
                      }
                  });

                  const infowindow = new google.maps.InfoWindow();
                  const content = `
          <div>
            <h3>${query}</h3>
            <p>Latitude: ${location.lat()}</p>
            <p>Longitude: ${location.lng()}</p>
          </div>
        `;
                  infowindow.setContent(content);
                  infowindow.open(map, marker);

                  google.maps.event.addListener(marker, 'click', () => {
                      infowindow.open(map, marker);
                  });

                  // Save the marker to remove it later
                  mapMarkers.push(marker);

                  // Adjust the zoom level as per your preference
                  map.setZoom(14);
              } else {
                  console.error('Geocode was not successful for the following reason:', status);
              }
          });
      }
  </script>

</body>

</html>
