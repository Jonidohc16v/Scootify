<x-layout>

    <h1>sta</h1>

    <!-- Search input and button -->
    <input type="text" id="search" placeholder="Search for a location">
    <button onclick="searchLocation()">Search</button>

    <!-- Map container -->
    <div id="map"></div>

    {{-- <script>
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
              <img src="/images/${photo}" alt="photo">
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
    </script> --}}

    <!-- Load Google Maps API with the provided key and libraries -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxuiJOaKoWJuMd77szJL47mfJPiqMT2yM&libraries=places&callback=initMap"
        async defer></script>
    {{-- AIzaSyAxuiJOaKoWJuMd77szJL47mfJPiqMT2yM --}}

</x-layout>
