@extends('layouts.app')
<style type="text/css">
	.jumbotron h1,
	.jumbotron .h1 {
		color: #4cae4c;
		font-size: 65px;
	}
</style>
@section('content')
<div class="container">
	<div class="jumbotron">
		<h1 class="txt-success">
			Welcome to Your Safe Internet
		</h1>
	</div>
	<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Here for the first time?</h2>
          <p>We provide a smooth and starting for you to the internet. Please click on the button below. Let us start the journey!</p>
          <p><a class="btn btn-secondary" href="/tutorial" role="button">Start &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Want to know where to get a service on Internet?</h2>
          <p>We recommend you the safest choice to get the set service. Click the below button</p>
          <p><a class="btn btn-secondary" href="#" role="button">Check Now &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Want to get the details of a web address?</h2>
          <p>The web addresses can be different types and can be identified with the Top Level Domain name. Click the below button to test a URL</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; iLeap 2018</p>
      </footer>
    </div>
</div>
@endsection