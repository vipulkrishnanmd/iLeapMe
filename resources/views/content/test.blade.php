<!-- Test page. Test use only -->
@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/w3.css')}}">

<div class="container">
<section class="templateux-hero"  data-scrollax-parent="true">
  <!-- Heading and Text -->
  <div class="container">
    <div class="row align-items-center justify-content-center intro">
      <div class="col-md-10" data-aos="fade-up">
        <h1>Good Job!</h1>
        <p class="lead">It is always a good idea to know about a website before you go there. Knowing more about  websites keeps you safe in the internet. Please find the details below.
        </p>

        <div class="row justify-content-center">
          <div id='loading' class="text-center"><br><br></div>
        </div>
      </div>
    </div>
  </div>
</section>


<div id="card_section">
  <section class="templateux-portfolio-overlap mb-5" id="next">
    <div class="container-fluid">
      <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">

        <div class="w3-bar w3-dark-gray">
          <div class="w3-bar-item">The site belongs to the below category</div>
        </div>  
        <br>
         <div class="row">
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

        <br>
        <div class="w3-bar w3-dark-gray">
          <div class="w3-bar-item">Details about the site</div>
        </div> 
        <br>

        <div class="card-deck text-center">
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
    </div>
  </section>
</div>
</div>
@endsection