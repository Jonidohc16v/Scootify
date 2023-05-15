<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
    <style>
        #map {
            height: 100%;
        }
        
        html,body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
  </head>
  <body>
    <div id="map"></div>

    <!-- prettier-ignore -->
    <script>
       (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({key: "AIzaSyAxuiJOaKoWJuMd77szJL47mfJPiqMT2yM", v: "weekly"});
    </script>
    <script src="{{asset('js/map.js')}}"></script>
    <script>
         let map;

         async function initMap() {
           const { Map } = await google.maps.importLibrary("maps");
           map = new Map(document.getElementById("map"), {
             zoom: 16,
           });
         
           // Get current location
           if (navigator.geolocation) {
             navigator.geolocation.getCurrentPosition(
               (position) => {
                 const { latitude, longitude } = position.coords;
                 const currentLocation = new google.maps.LatLng(
                   latitude,
                   longitude
                 );
                 map.setCenter(currentLocation);
                 new google.maps.Marker({
                   position: currentLocation,
                   map: map,
                   title: "You are here",
                 });
               },
               (error) => {
                 console.error(error);
               }
             );
           } else {
             console.error("Geolocation is not supported by this browser.");
           }
         }
         
         initMap();
    </script>
  </body>
</html>