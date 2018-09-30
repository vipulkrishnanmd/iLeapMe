@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/w3.css')}}">

<div class="container">
  <section class="templateux-hero"  data-scrollax-parent="true">
   <!-- Heading and Text -->

    <div class="container">
      <div class="row align-items-center justify-content-center intro">
        <div class="col-md-10" data-aos="fade-up">
          <h1>iLeap Hotline Chat</h1>
          <p class="lead">iLeap Hotline Chat does its best with the iLeap Hotline Browser Extension. Please install the extension for your browser. Or please submit your secret code below.
            <div class="col-12 col-md-10 col-lg-8">
              <div class="card-body row no-gutters align-items-center">
                <div class="col-auto">
                </div>
                <!--end of col-->

                <div class="col">
                  <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter your secret code" id="url" required>
                </div>
                <!--end of col-->
                <div class="col-auto">
                  <button class="btn btn-lg btn-success" id="ajaxSubmit" onclick="submit();">Go!</button>
                </div>

                <!--end of col-->
              </div>
            </div>
          </p>

          <div class="row justify-content-center">
            <div id='loading' class="text-center"><br><br></div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<!-- Script section for submitting the key -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
</script>
<script>
 jQuery(document).ready(function(){
  jQuery('#ajaxSubmit').click(function(e){
   var x = document.getElementById('url').value;
   if (x == "" || x == null) {
    alert("Please enter a valid key");
    return false;
  }
  window.location.href = "/chat?url=" + window.location.href + "&code=" + x;
});
});
</script>
@endsection