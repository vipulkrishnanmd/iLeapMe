@extends('layouts.app')

@section('content')

<section class="templateux-hero"  data-scrollax-parent="true">
  <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="images/hero_2.jpg" /></div> -->

  <div class="container">
    <div class="row align-items-center justify-content-center intro">
      <div class="col-md-10" data-aos="fade-up">
        <h1>Check your URL</h1>
        <p class="lead">Please enter your URL and hit search.</p>
        <a href="#next" class="go-down js-smoothscroll"></a>
      </div>
    </div>
  </div>
</section>
<!-- END templateux-hero -->


<section class="templateux-portfolio-overlap mb-5" id="next">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8">
            <div class="card-body row no-gutters align-items-center">
              <div class="col-auto">
              </div>
              <!--end of col-->
              <div class="col">
                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter your TLD here. (eg .com)" id="tld">
              </div>
              <!--end of col-->
              <div class="col-auto">
                <button class="btn btn-lg btn-success" id="ajaxSubmit">Search</button>
              </div>
              <!--end of col-->
            </div>
          </div>
          <!--end of col-->
        </div>

      <div id="card_section">
        
      </div>
      
      </div>
      

      <div class="jumbotron col-md-6 offset-md-3" id="msg">
        <h2>Please enter the TLD and hit search!</h2>
        <p id="p1"></p>
        <p id="p2"></p>
      </div>
      <div class="jumbotron col-md-6 offset-md-3" id="msg2">
        <h2></h2>
        <p id="p1"></p>
        <p id="p2"></p>
      </div>
    </div>
  </div>
</section>





<script src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
</script>
<script>
 jQuery(document).ready(function(){
  jQuery('#ajaxSubmit').click(function(e){
   e.preventDefault();
   $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
   $( "#card_section" ).replaceWith('<div id="card_section" class="text-center"><br><br><img src="/images/aloader.gif" alt="Loading.." class="img-fluid" width="100"></div>');
   jQuery.ajax({
    url: "{{ url('/gettld') }}",
    method: 'post',
    data: {
      tld: jQuery('#tld').val()
    },
    success: function(result){
     $( "#msg" ).find("h2").text("TLD Info : " + result.tld);
     $( "#msg" ).find("#p1").text("Country : " + result.country );
     $( "#msg" ).find("#p2").text("Notes : " + result.description );
     $( "#msg2" ).find("h2").text("Threats : " + result.gsb_threat);
     $( "#card_section" ).replaceWith(result.code);
     result = null;
   }});
 });
});
</script>
@endsection