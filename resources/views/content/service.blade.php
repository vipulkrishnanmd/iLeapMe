@extends('layouts.app')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<br><br><br><br><br><br><br><br><br>

<section class="templateux-portfolio-overlap" id="next">
  <div class="container-fluid">
	<div class="container">
		<h1 class="display-3">{{$service->service}}</h1>
		<p class="h3">{{$service->description}}</p>
		<br>
		<p class="collapse" id="viewdetails">{{$wiki->extract}}</p>
		<p><a class="btn btn-success btn-lg" data-toggle="collapse" data-target="#viewdetails" role="button">Learn more &raquo;</a></p>
	</div>
</div>
</section>

<br><br><br><br>

<section class="templateux-portfolio-overlap" id="next2">
  <div class="container-fluid">
<div class="container">
	<div class="jumbotron col-md-12" id="msg">
		<h2>Popular Service Provider</h2>
		<p id="p1"><a href="{{$service->popularprovider}}">{{$service->popularprovider}}</a></p>
	</div>
</div>
</div>
</section>

<br><br><br><br>

<section class="templateux-portfolio-overlap" id="next3">
  <div class="container-fluid">

<div class="container">
	<h3>Possible Risks</h3>
	<br>
	<!-- Example row of columns -->
	<div class="row">
		@foreach ($threats as $threat)
		<div class="col-md-4">
			<h4>{{$threat->name}}</h4>
			<p>{{$threat->risk}}</p>
		</div>
		@endforeach  
	</div>

	<hr>

</div> <!-- /container -->
</div>
</section>
@endsection