@extends('layouts.app')

@section('content')
<div class="container">
<style type="text/css">

  
hr{border:0;border-top:1px solid #eee;margin:20px 0}
.w3-amber,.w3-hover-amber:hover{color:#000!important;background-color:#ffc107!important}
.w3-aqua,.w3-hover-aqua:hover{color:#000!important;background-color:#00ffff!important}
.w3-blue,.w3-hover-blue:hover{color:#fff!important;background-color:#2196F3!important}
.w3-light-blue,.w3-hover-light-blue:hover{color:#000!important;background-color:#87CEEB!important}
.w3-brown,.w3-hover-brown:hover{color:#fff!important;background-color:#795548!important}
.w3-cyan,.w3-hover-cyan:hover{color:#000!important;background-color:#00bcd4!important}
.w3-blue-grey,.w3-hover-blue-grey:hover,.w3-blue-gray,.w3-hover-blue-gray:hover{color:#fff!important;background-color:#607d8b!important}
.w3-green,.w3-hover-green:hover{color:#fff!important;background-color:#4CAF50!important}
.w3-light-green,.w3-hover-light-green:hover{color:#000!important;background-color:#8bc34a!important}
.w3-indigo,.w3-hover-indigo:hover{color:#fff!important;background-color:#3f51b5!important}
.w3-khaki,.w3-hover-khaki:hover{color:#000!important;background-color:#f0e68c!important}
.w3-lime,.w3-hover-lime:hover{color:#000!important;background-color:#cddc39!important}
.w3-orange,.w3-hover-orange:hover{color:#000!important;background-color:#ff9800!important}
.w3-deep-orange,.w3-hover-deep-orange:hover{color:#fff!important;background-color:#ff5722!important}
.w3-pink,.w3-hover-pink:hover{color:#fff!important;background-color:#e91e63!important}
.w3-purple,.w3-hover-purple:hover{color:#fff!important;background-color:#9c27b0!important}
.w3-deep-purple,.w3-hover-deep-purple:hover{color:#fff!important;background-color:#673ab7!important}
.w3-red,.w3-hover-red:hover{color:#fff!important;background-color:#f44336!important}
.w3-sand,.w3-hover-sand:hover{color:#000!important;background-color:#fdf5e6!important}
.w3-teal,.w3-hover-teal:hover{color:#fff!important;background-color:#009688!important}
.w3-yellow,.w3-hover-yellow:hover{color:#000!important;background-color:#ffeb3b!important}
.w3-white,.w3-hover-white:hover{color:#000!important;background-color:#fff!important}
.w3-black,.w3-hover-black:hover{color:#fff!important;background-color:#000!important}
.w3-grey,.w3-hover-grey:hover,.w3-gray,.w3-hover-gray:hover{color:#000!important;background-color:#9e9e9e!important}
.w3-light-grey,.w3-hover-light-grey:hover,.w3-light-gray,.w3-hover-light-gray:hover{color:#000!important;background-color:#f1f1f1!important}
.w3-dark-grey,.w3-hover-dark-grey:hover,.w3-dark-gray,.w3-hover-dark-gray:hover{color:#fff!important;background-color:#616161!important}
.w3-pale-red,.w3-hover-pale-red:hover{color:#000!important;background-color:#ffdddd!important}
.w3-pale-green,.w3-hover-pale-green:hover{color:#000!important;background-color:#ddffdd!important}
.w3-pale-yellow,.w3-hover-pale-yellow:hover{color:#000!important;background-color:#ffffcc!important}
.w3-pale-blue,.w3-hover-pale-blue:hover{color:#000!important;background-color:#ddffff!important}
.w3-red,.w3-hover-red:hover{color:#fff!important;background-color:#f44336!important}
.w3-bar-block .w3-dropdown-hover,.w3-bar-block .w3-dropdown-click{width:100%}
.w3-bar-block .w3-dropdown-hover .w3-dropdown-content,.w3-bar-block .w3-dropdown-click .w3-dropdown-content{min-width:100%}
.w3-bar-block .w3-dropdown-hover .w3-button,.w3-bar-block .w3-dropdown-click .w3-button{width:100%;text-align:left;padding:8px 16px}
.w3-main,#main{transition:margin-left .4s}
.w3-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4)}
.w3-modal-content{margin:auto;background-color:#fff;position:relative;padding:0;outline:0;width:600px}
.w3-bar{width:100%;overflow:hidden}.w3-center .w3-bar{display:inline-block;width:auto}
.w3-bar .w3-bar-item{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0}
.w3-bar .w3-dropdown-hover,.w3-bar .w3-dropdown-click{position:static;float:left}
.w3-bar .w3-button{white-space:normal}
.w3-bar-block .w3-bar-item{width:100%;display:block;padding:8px 16px;text-align:left;border:none;white-space:normal;float:none;outline:0}
.w3-bar-block.w3-center .w3-bar-item{text-align:center}.w3-block{display:block;width:100%}

</style>


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
              <!--end of col-->
              <div class="col">
                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter your URL here. (eg http://ileap.me)" id="tld">
              </div>
              <!--end of col-->
              <div class="col-auto">
                <button class="btn btn-lg btn-success" id="ajaxSubmit">Check!</button>
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

<section class="templateux-portfolio-overlap mb-5" id="next">
  <div class="container-fluid">

<div class="col-md-12" data-aos="fade-up" data-aos-delay="100">

<div class="w3-bar w3-dark-gray">
  <div class="w3-bar-item">The site belongs to the below category</div>
</div>           
            <div class="row pt-sm-0 pt-md-5 mb-5">

              <div class="col-lg-6">
                <div class="media templateux-media mb-4">
                  <div class="mr-4 icon">
                    <span class="icon-command display-3"></span>
                  </div>
                  <div class="media-body">
                    <h3 class="h5">Social Networks</h3>
                    <p>Short descreption clara made. Explore the services available on the internet.  We provide recommend you the best in class and safe services.</p><p> <a href="#">Learn More</a></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- END row -->
      

<div class="w3-bar w3-dark-gray">
  <div class="w3-bar-item">Details about the site</div>
</div> 
<br>

<div class="card-deck text-center" id="card_section">
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
</div>
</div>
</section>
</div>
</section>
</div>


@endsection