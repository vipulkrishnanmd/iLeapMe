@extends('layouts.app')
<style type="text/css">
.jumbotron h1,
.jumbotron .h1 {
  color: #4cae4c;
  font-size: 65px;
}
#mapid { height: 180px; }
</style>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>

@section('content')
<div class="container">
  <div class="jumbotron">
    <h1 class="txt-success">
      Internet is not so Young!!
    </h1>
  </div>
  <div>
    <p> Internet is made for everyone. It is of course the largest source of information in the present world. We can get a lot of awesome services on the internet. At the sime time there is a lot possible dangers too. At iLeap, our mission is to to give our seniors a smooth and safe entry into the world of the internet. We care more for your safty and we have made a number of tools exclussively for seniors to stay safe on the internet. We will give a brief introduction to the internet before we introduce the tools.
    </p>
    <h1>What is Internet?</h1>
    <p> Internet is simply a network of inter connected computers. But what we often call 'Internet' is World Wide Web. WWW is an information space where documents and other web resources are identified by Uniform Resource Locators (URLs), interlinked by hypertext links, and accessible via the Internet. </p>

    <p> A URL is simple a kind of address on the WWW. For example the address (URL) of this website is www.ileap.cf. We will see more about this later</p>

    <p> To access the materials from the internet, we need a computer program. The most general computer programs for accessing the internet is a 'web browser'. Chrome, Mozilla, and Edge are the most common web browsers. The window where you see this page is a browser window. On the top side of the window, a long bar with the address of the webpage (ileap.cf/tutorial) should be there. This is where we ask the browser to take us to a web page. You can type the address there and press enter to go. This is the most basic way of navigation on the web</p>

    <p> Another way is called Hypertext. This is basically a text loaded with an address. When we click on that text it goes to another page. For example <a href='#'>THIS</a> is a hypertext. It doesn't take you anywhere because it is linked to the same page. However if you move the curser on it, you can see the pointer symbol changing, also you can see the address of the pointed page on the left botton side of the window.</p>

    <p> The easiest way is yet another one. There is a very simple tool called search engine. We can search the content with some key words. For example, if we wants to read new from the ABC website, we just search ABC news and the search engine will show the results. Always use the back button on the top left side of the window to come back to the previous page. www.google.com is one of the most used search engine. For example, click <a href="https://www.google.com.au/search?q=abc+news&oq=abc+news&aqs=chrome..69i57j69i60l2j0l3.2809j0j7&sourceid=chrome&ie=UTF-8" target="_blank">here</a> to see the search results for "ABC news". Please dont forget to click the back button to come back. Please note the search bar on the top part of the page (written ABC news). This is where we enter the search keyword and hit enter.</p>

    <h1>However..</h1>
    <p> Although internet is a cool source of knowledge and resources, it is sometimes a bit dangerous too. It is just like a market, if you know how to stay safe, you will be safe. We take the challange of teaching you how to stay safe and how to find out possible dangers. We have made and are making a number of tools for that. We will see them one by one</p>

    <h1>Services on Internet</h1>
    <p> Internet offers a lot of services. For example we can get a live weather forcast anytime. Below is a forcast for the melbourne weather and is live. If you click on it it will take you to a weather service providers website with more options. You can also see the weather simply searching for "weather" on google.</p>

    <div>
      <a class="weatherwidget-io" href="https://forecast7.com/en/n37d81144d96/melbourne/" data-label_1="MELBOURNE" data-label_2="WEATHER" data-theme="original" >MELBOURNE WEATHER</a>
      <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
      </script>
    </div>

    <br>

    <div id="mapid" style="width: 600px; height: 400px;"></div>
    <script>
      var lat = 0;
      var long = 0;
      function getLocation() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
          x.innerHTML = "Geolocation is not supported by this browser.";
        }
      }

      function showPosition(position) {
        lat = position.coords.latitude;
        long = position.coords.longitude;
        var mymap = L.map('mapid').setView([lat, long], 13);
        var marker = L.marker([lat, long]).addTo(mymap);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
          maxZoom: 18,
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
          '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          id: 'mapbox.streets'
        }).addTo(mymap);


      }
      window.onload = getLocation();

      
    </script>

    
    @endsection