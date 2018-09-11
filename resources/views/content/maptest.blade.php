<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />
  <style>
    body {
      margin: 0;
      padding :0;
    }
    .map {
      position: absolute;
      top: 0;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
<div id='map-popups' class='map'> </div>
<script>
L.mapbox.accessToken = 'pk.apikey.apikey';
var mapPopups = L.mapbox.map('map-popups', 'mapbox.streets')
  .setView([37.8, -96], 4);
var myLayer = L.mapbox.featureLayer().addTo(mapPopups);

$.getJSON('{{asset('files/intdata.geojson')}}', function(geojson) {
    myLayer.setGeoJSON(geojson);
});


</script>
</body>
</html>