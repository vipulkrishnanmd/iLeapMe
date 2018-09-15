@extends('layouts.app')

@section('content')

<section class="templateux-hero"  data-scrollax-parent="true">
  <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="images/hero_2.jpg" /></div> -->

  <div class="container">
    <div class="row align-items-center justify-content-center intro">
      <div class="col-md-10" data-aos="fade-up">
        <h1>Check your URL</h1>
        <p class="lead">Knowing more about a website keeps you safe in the internet. Before you visit any new website, just have a ckeck here to ensure that your website is safe and free of any malicious contents.<div class="col-12 col-md-10 col-lg-8">
            <div class="card-body row no-gutters align-items-center">
              <div class="col-auto">
              </div>
              https://
              <!--end of col-->
              <div class="col">
                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter your URL here. (eg http://ileap.me)" id="tld">
              </div>
              <!--end of col-->
              <div class="col-auto">
                <button class="btn btn-lg btn-secondary" id="ajaxSubmit">Search</button>
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
<!-- END templateux-hero -->


<section class="templateux-portfolio-overlap mb-5" id="next">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12" data-aos="fade-up">
        

      <div id="card_section">
        
      
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
   $( "#loading" ).replaceWith('<div id="loading" class="text-center"><br><br><img src="/images/loading.gif" width="200%" alt="Loading.." class="img-fluid" width="100"></div>');
   jQuery.ajax({
    url: "{{ url('/gettld') }}",
    method: 'post',
    data: {
      tld: jQuery('#tld').val()
    },
    success: function(result){
     $( "#loading" ).replaceWith('<div id="loading" class="text-center"></div>');
     $( "#card_section" ).replaceWith(result.code);
     result = null;
     window.location.href = "#next";
   }});
 });
});
</script>
@endsection