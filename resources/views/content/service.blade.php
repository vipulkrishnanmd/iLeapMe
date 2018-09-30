@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/w3.css')}}">
<br><br><br><br><br><br><br><br><br>
<!-- Heading and Text with wiki test -->
<section class="templateux-portfolio-overlap" id="next">
	<div class="container-fluid">
		<div class="container">
			<h1 class="display-3">{{$service->service}}</h1><br>
			<p class="h3">{{$service->description}}</p>
			<br>
			<p class="collapse" id="viewdetails">{{$wiki->extract}}</p>
			<p class="text-light"><a class="btn btn-success btn-lg" data-toggle="collapse" data-target="#viewdetails" role="button">Learn more &raquo;</a></p>
		</div>
	</div>
</section>

<br><br><br><br><br><br>

<section class="templateux-portfolio-overlap" id="next2">
	<div class="container-fluid">
		<div class="container">
			<!-- Popular provider section -->
			<div class="w3-bar w3-dark-gray">
				<div class="w3-bar-item">Popular Service Provider</div>
			</div>  
			<br>
			<div class="row">
				<div class="col-lg-6">
					<div class="media templateux-media mb-4">
						<div class="mr-4 icon">
							<span class="icon-command display-3"></span>
						</div>
						<div class="media-body">
							<h3 class="h5">Provider</h3>
							<p><a href="{{$service->popularprovider}}">{{$service->popularprovider}}</a></p>
						</div>
					</div>
				</div>

			</div>

			<br>

			<!-- Risk section -->
			<div class="w3-bar w3-dark-gray">
				<div class="w3-bar-item">Possible Risks</div>
			</div> 
			<br><br>
			<div class="row">
				@foreach ($threats as $threat)
				<div class="col-md-4">
					<h4>{{$threat->name}}</h4>
					<p>{{$threat->risk}}</p>
				</div>
				@endforeach  
			</div>

			<hr>

		</div>
	</div>
</section>
@endsection