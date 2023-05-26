<!DOCTYPE html>
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

    <style>
        body {
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
    </style>

</head>


<body class="d-flex flex-column min-vh-100">


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
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/ride">
                                <span class="material-symbols-outlined">
                                    star
                                </span><br>
                                GET A RIDE</a>
                        </li>
                    @endauth
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
    <x-flash-message />


    <main>

        {{ $slot }}

    </main>


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
                        <p class=""><a href="/aboutus"><span class="text-dark">About us</span> </a></p>
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
                            href="https://instagram.com/scootify.lux?igshid=ZDc4ODBmNjlmNQ==" role="button"
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
            $('#userMsg').fadeOut('slow');
        }, 3000);


        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
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


        // RIDE SCRIPT
        const stationSelect = document.getElementById('station');
        const escooterSelect = document.getElementById('escooter');

        stationSelect.addEventListener('change', (event) => {
            const selectedStationId = event.target.value;
            updateEscooterOptions(selectedStationId);
        });

        function updateEscooterOptions(stationId) {
            const escooters = document.querySelectorAll('#escooter option');

            escooters.forEach((option) => {
                const escooterStationId = option.getAttribute('data-station-id');

                if (escooterStationId === stationId || stationId === '') {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            });
        }

        document.getElementById('firstForm').addEventListener('submit', function(e) {
        var firstFormSelect = document.getElementById('escooter');
        var secondFormSelect = document.getElementById('escooter1');
        var selectedOption = firstFormSelect.options[firstFormSelect.selectedIndex].value;
        localStorage.setItem('selectedEscooter', selectedOption);
        });

        // Check if there is a stored value for selectedEscooter
        var storedEscooter = localStorage.getItem('selectedEscooter');
        if (storedEscooter) {
            var secondFormSelect = document.getElementById('escooter1');
            secondFormSelect.value = storedEscooter;
        }

    </script>

</body>

</html>
