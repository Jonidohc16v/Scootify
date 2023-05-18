<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
    <style>
        #map {
            height: 70%;
            width: 70%;
        }
        
        html,body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .custom-marker {
            width: 32px;
            height: 32px;
        }
        .custom-marker img {
            width: 100%;
            height: 100%;
        }
        #stattionPhoto{
          width: 10%;
          height: 10%;
        }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">
        // Step 1: Define the initialization function for the map
        function initMap() {
          const luxembourgLatLng = { lat: 49.6116, lng: 6.13 }; // Luxembourg City coordinates
      
          // Step 2: Create a new map instance and set its properties
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 13, // Set the zoom level for Luxembourg City
            center: luxembourgLatLng, // Set Luxembourg City as the center of the map
          });
      
          const locations = {!! json_encode($locations) !!};
          const infowindow = new google.maps.InfoWindow();
      
          // Step 3: Iterate over the locations and create markers
          locations.forEach(location => {
            const { id, name, address, lat, lon, capacity, photo, user_id, escooters_id, created_at, updated_at } = location;
      
            // Create a marker for each location
            const marker = new google.maps.Marker({
              position: new google.maps.LatLng(lat, lon),
              map: map,
              icon: {
                url: '/images/escooter-icon-1.png',
                scaledSize: new google.maps.Size(48, 48)
              }
            });
      
            // Step 4: Add a click event listener to each marker to display info window
            google.maps.event.addListener(marker, 'click', () => {
              const content = `
                <div>
                  <h3>${name}</h3>
                  <p>ID: ${id}</p>
                  <p>address: ${address}</p>
                  <p>Latitude: ${lat}</p>
                  <p>Longitude: ${lon}</p>
                  <p>capacity: ${capacity}</p>
                  <p>user_id: ${user_id}</p>
                  <p>escooters_id: ${escooters_id}</p>
                  <p>Created At: ${created_at}</p>
                  <p>Updated At: ${updated_at}</p>
                  <div id="stattionPhoto" >${photo}</div>
                </div>
              `;
              infowindow.setContent(content);
              infowindow.open(map, marker);
            });
          });
        }
      
        // Step 5: Expose the initialization function globally
        window.initMap = initMap;
      </script>
      
    <script
        type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAxuiJOaKoWJuMd77szJL47mfJPiqMT2yM&callback=initMap">
    </script>
   </body>
</html>
