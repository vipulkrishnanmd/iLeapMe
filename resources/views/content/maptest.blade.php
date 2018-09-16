<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Add a geocoder</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%;;
    margin-right: auto;}

        .marker {
  background-image: url("{{asset('images/mapbox-icon.png')}}");
  background-size: cover;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  cursor: pointer;
}

.mapboxgl-popup {
  max-width: 200px;
}

.mapboxgl-popup-content {
  text-align: center;
  font-family: 'Open Sans', sans-serif;
}
    </style>
</head>
<body>

<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />
<div id='map'></div>

<script>
mapboxgl.accessToken = 'pk.eyJ1IjoidmlwdWxrbWQiLCJhIjoiY2psZDQ4MGV2MDdnejN3cXJ5YjUwZ2NwMCJ9.1LIUnmVWo_0yftCkr6xSrQ';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v9',
    center: [144.99, -37.81],
    zoom: 13
});

map.addControl(new MapboxGeocoder({
    accessToken: mapboxgl.accessToken
}));

$.getJSON('{{asset('files/intdata.geojson')}}', function(geojson) {
    geojson.features.forEach(function(marker) {

  // create a HTML element for each feature
  var el = document.createElement('div');
  el.className = 'marker';

  // make a marker for each feature and add to the map
  new mapboxgl.Marker(el)
  .setLngLat(marker.geometry.coordinates)
  .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
  .setHTML('<a href="#"><h3>' + marker.properties.Title + '</h3></a><p>' + marker.properties.Address2 + '</p>'))
  .addTo(map);
});
});
</script>

</body>
</html>