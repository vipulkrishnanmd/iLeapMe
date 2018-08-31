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
      iLeap!
    </h1>
     <p class="h3">Internet is made for everyone. It is of course the largest source of information in the present world. We can get a lot of awesome services on the internet. At the sime time there is a lot possible dangers too. At iLeap, our mission is to to give our seniors a smooth and safe entry into the world of the internet. We care more for your safty and we have made a number of tools exclussively for seniors to stay safe on the internet. We will give a brief introduction to the internet before we introduce the tools.
    </p>
  </div>

  <div class="jumbotron">
    <h1 class="txt-success">
      What is Included?
    </h1>
     <p class="h3">Currenty the website offers a feature to find out the services and the best providers. It gives you insight about the possible threats associated with the websites.
    </p> <br>
    <p class="h3">The site also includes a URL information function which currently gives details about the Top Level Domain (eg. .com). Knowing about the websire makes you stay safe on the internet.</p>
  </div>

  <div class="jumbotron">
    <h1 class="txt-success">
      Usability
    </h1>
     <p class="h3">It is exclussively meant for you and we have made it as simple as possible. There is no more confusions about where to go. <br><br>
     We have made it easy to access. Tou can go to the pages from the top navigation bar, ar if you dont like using mouse, just use our key board shortcuts. <br><br>
     Alt + M for main menu<br>
     Alt + A for this page<br>
     Alt + B for service search page <br>
     Alt + C for URL details page
     </p>
  </div>

  <div>
  
@endsection