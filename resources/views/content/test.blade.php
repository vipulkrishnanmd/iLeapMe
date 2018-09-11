@extends('layouts.app')

@section('content')
<div class="container">
<br><br><br><br><br><br>

<div class="card-deck text-center" id="card_section">
  <div class="row mx-auto">
      <div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">Top Level Domain</div>
        <div class="card-body text-secondary">
          <img src="images/successblack.png" alt="Domain" class="img-fluid mx-auto" width="100">
          <br><br>
          <h5 class="card-title text-secondary">'.$tld->tld.'</h5>
          <p class="card-text">Country: '.$tld->country.' <br> Notes: '.$tld->description.'</p>
        </div>
      </div>
      <div class="card text-success border-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Reputation</div>
        <div class="card-body">
          <img src="images/success.png" alt="Free Template" class="img-fluid mx-auto" width="100">
          <br><br>
          <h5 class="card-title text-success">Highly Reputed Site</h5>
          <p class="card-text">The site has a Page Rank of 100 which is comparitively very high. We use Open Page Rank service for determining the page rank.</p>
        </div>
      </div>
      <div class="card text-danger border-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Advertisement</div>
        <div class="card-body">
          <img src="images/error.png" alt="Free Template" class="img-fluid mx-auto" width="100">
          <br><br>
          <h5 class="card-title text-danger">Site Contains Advertisements</h5>
          <p class="card-text">Please be careful. You may be tricked to go to some third party web pages.</p>
        </div>
      </div>
  </div>
  <div class="row mx-auto">
    <div class="card border-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header">Safety</div>
      <div class="card-body text-secondary">
        <img src="images/successblack.png" alt="Free Template" class="img-fluid mx-auto" width="100">
        <br><br>
        <h5 class="card-title text-secondary">No threats detected</h5>
        <p class="card-text">We couldnt find any threat records for this website.</p>
      </div>
    </div>
  </div>
</div>


</div>
@endsection