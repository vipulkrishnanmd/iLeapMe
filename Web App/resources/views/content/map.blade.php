@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.49.0/mapbox-gl.css' rel='stylesheet' />
<style>
body { margin:0; padding:0; }
#map { position:relative; top:30; bottom:0; width:100%;;
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

<!-- Style for the table -->
<style type="text/css">

div.table-title {
 display: block;
 margin: auto;
 max-width: 600px;
 padding:5px;
 width: 100%;
}

.table-title h3 {
 color: #fafafa;
 font-size: 30px;
 font-weight: 400;
 font-style:normal;
 font-family: "Roboto", helvetica, arial, sans-serif;
 text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
 text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}

th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}

th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}

tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}

tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}

tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}

tr:nth-child(odd) td {
  background:#EBEBEB;
}

tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}

tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}

td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}


</style>

<!-- Scripts for displaying details -->
<script type="text/javascript">
  function detailsFun(x){  

    $.getJSON( "files/intdata.geojson", function( data ) {
      var items = [];
      $.each( data.features, function( key, val ) {
        if(val.properties.FIELD1 == x){
          $( "#replace" ).replaceWith( '<div id="replace"><section class="templateux-portfolio-overlap mb-5"data-scrollax-parent="true"><div class="container"><div class="row align-items-center justify-content-center intro"><div class="col-md-10" data-aos="fade-up"><br><br><br><br><br><br><br><div class="table-title h3">Internet Accesss Center Details</div><table class="table-fill"><thead></thead><tbody class="table-hover"><tr><td class="text-left">Name</td><td class="text-left">'+ val.properties.Title +'</td></tr><tr><td class="text-left">Address</td><td class="text-left">' + val.properties.Address2 + '</td></tr><tr><td class="text-left">Suburb</td><td class="text-left">' + val.properties.Suburb + '</td></tr><tr><td class="text-left">Phone</td><td class="text-left">' + val.properties.Contact1_Phone + '</td></tr><tr><td class="text-left">Cost</td><td class="text-left">' + val.properties.Cost + '</td></tr><tr><td class="text-left">Wheelchair Access</td><td class="text-left">' + val.properties.Wheelchair_Access + '</td></tr><tr><td class="text-left">Training Available</td><td class="text-left">' + val.properties.Training + '</td></tr><tr><td class="text-left">Large Monitor Available</td><td class="text-left">' + val.properties.Large_Monitor + '</td></tr><tr><td class="text-left">Assistance Available</td><td class="text-left">' + val.properties.Assistance + '</td></tr></tbody></table><br><br><br></div></div></div></div></section>');
        }
      });


    });
    window.location.href = "#replace";
  }

</script>

<div class="container">
  <section class="templateux-hero"  data-scrollax-parent="true">
    <!-- Heading and Text -->
    <div class="container">
      <div class="row align-items-center justify-content-center intro">
        <div class="col-md-10" data-aos="fade-up">
          <h1>Internet Access Locations</h1>
          <p class="lead">We know you don't like to access the internet on the small screen of your smart phone. We provide you a number of location across Victoria to safely access the internet on the go. Most of them are free. See the map below. Click on the markers to know more about the centers.
          </p>

          <div class="row justify-content-center">
            <div id='loading' class="text-center"><br><br></div>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- Map section -->
  <div id="card_section">
    <section class="templateux-portfolio-overlap mb-5" id="next">
      <div class="container-fluid">
        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
          <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
          <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />
          <div id='map'></div>

          <script>
            mapboxgl.accessToken = 'pk..';
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
            .setHTML('<a href="#"><h3>' + marker.properties.Title + '</h3></a><p>' + marker.properties.Address2 + '</p><p><button onclick= "detailsFun(' + marker.properties.FIELD1 + ');">Know More</button>'))
            .addTo(map);
            });
            });
          </script>

        </div>
      </div>
    </section>
  </div>

<!-- Section for inserting the table -->
  <div id="replace">
  </div>
</div>


@endsection