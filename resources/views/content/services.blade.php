@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<!-- Style for the list -->
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}

.pagination li {
  display:inline-block;
  padding:5px;
}

</style>

<!--Script for the list -->
<script>
  function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }

</script>

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>  
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script type="text/javascript">
  var monkeyList = new List('test-list', {
    valueNames: ['name'],
    page: 3,
    pagination: true
  }); 
</script>

<!-- Main jumbotron -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Find a Service</h1>
    <p class="h3">Find a service on the internet. See the popular categories below. Use the search box to filter.</p>
  </div>
</div>

<!-- Popular functions -->
<div class="container">
  <div class="card-group">

    <div class="card" onclick="window.location.href = '/service/33';">
      <img class="card-img-top" src="/images/social-media.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Social Media</h5>
        <p class="card-text">Connect with your friends and family and meet new friends in the digital world!</p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
    <div class="card" onclick="window.location.href = '/service/43';">
      <img class="card-img-top" src="/images/news.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">News</h5>
        <p class="card-text">Read the news online and get updates much faster than any other news medias!</p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
    <div class="card" onclick="window.location.href = '/service/44'";>
      <img class="card-img-top" src="/images/hollywood.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Movies</h5>
        <p class="card-text">Yes!! Watch movies online. You may need a subscription but it is worthy.</p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
  </div>

  <br><br>
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
      <div class="card-body row no-gutters align-items-center">
        <div class="col-auto">
          <i class="fas fa-search h4 text-body"></i>
        </div>
        <!--end of col-->
        <div class="col dataTables_filter">

          <input class="form-control form-control-lg form-control-borderless" type="search" id="myInput" onkeyup="myFunction()" placeholder="Search a service (eg. Movies)">
        </div>
        <!--end of col-->
        <div class="col-auto">
        </div>
        <!--end of col-->
      </div>
    </div>
    <!--end of col-->
  </div>

  <!-- List section -->
  <div id="test-list">
    <ul id="myUL" class="list list-group">
      @foreach ($services as $service)
      <li class="list-group-item list-group-item-dark"><a href="/service/{{$service->id}}"><p class="name">{{ $service->service }}</p></a></li>
      @endforeach
    </ul>
    <ul class="pagination"></ul>
  </div>
</div>

@endsection