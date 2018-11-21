<link rel = "stylesheet" type = "text/css" href = "../CSS/index.css"/>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>

   <div id = "drop-box-map">
   </div>

   <script type = "text/javascript">
        /*var dbMap = L.map('drop-box-map').setView([38.811080, -84.356000], 7); */
        var dbMap = L.map('drop-box-map').setView([51.505, -0.09], 13);
 

         L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                       attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributor',    
                       //other attributes.
    }).addTo(dbMap);
    </script>



