@extends('layouts.app')

@section('content')
    <!-- END templateux-navbar -->

    <br><Br>
    <section class="templateux-hero">
      <div class="container">
        <div class="row align-items-center justify-content-center intro">
          <div class="col-md-5" data-aos="fade-up">
            <h1 class="text-danger">Welcome to Your Safe Internet!</h1>
            <a href="#next" class="go-down js-smoothscroll"></a>
          </div>
          <div class="col-md-7" data-aos="fade-up">
            <figure>
                <img src="images/seniors5.png" alt="We love iLeapMe" class="img-fluid">  
              </figure>
            </div>
          <div class="progress">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
        </div>
      </div>
    </section>
    <!-- END templateux-hero -->

    <section class="templateux-portfolio-overlap" id="next">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up">
            <a class="project animsition-link" href="{{url('/url')}}">
              <figure>
                <img src="images/url.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>Check your URL</h2>
                  <span>See how safe a website is</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <a class="project animsition-link" href="{{url('/services')}}">
              <figure>
                <img src="images/services.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>Find a service!</h2>
                  <span>Explore the internet.</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- END row -->
    
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <a class="project animsition-link" href="{{url('/map')}}">
              <figure>
                <img src="images/map.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>Find on the go Internet spots</h2>
                  <span>See where you can access safe internet on large monitors outside your home.</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <a class="project animsition-link" href="{{url('/chat')}}">
              <figure>
                <img src="images/com.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>Hotline Chat</h2>
                  <span>Ask someone to help you in a single click whenever you have some doubts.</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <a class="project animsition-link" href="{{url('/about')}}">
              <figure>
                <img src="images/older.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>About</h2>
                  <span>iLeapMe</span>
                </div>
              </div>
            </a>
          </div>
          
        </div>
        <!-- END row -->
      </div>
    </section>

   
    <!-- END section -->
    <section class="templateux-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4" data-aos="fade-up">
            <h2 class="section-heading mt-3">What We Do</h2>
          </div>
          <div class="col-md-8" data-aos="fade-up" data-aos-delay="100">

            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-5">We make our elders safe on the internet. We provide tools and tricks to stay safe online.</h2>
              </div>
            </div>
            

            <div class="row  pt-sm-0 pt-md-5 mb-5">

              <div class="col-lg-6">
                <div class="media templateux-media mb-4">
                  <div class="mr-4 icon">
                    <span class="icon-monitor display-3"></span>
                  </div>
                  <div class="media-body">
                    <h3 class="h5">Find Services</h3>
                    <p>Explore the services available on the internet.  We provide recommend you the best in class and safe services.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="media templateux-media mb-4">
                  <div class="mr-4 icon">
                    <span class="icon-command display-3"></span>
                  </div>
                  <div class="media-body">
                    <h3 class="h5">Check your URL.</h3>
                    <p>Ensure a website is safe and good for you before going to it. We inform you all you want to know about a website.</p>
                  </div>
                </div>
              </div>

            </div>
            <!-- END row -->
            <div class="row clearfix">
              <div class="col-lg-6">
                <div class="media templateux-media mb-4">
                  <div class="mr-4 icon">
                    <span class="icon-command display-3"></span>
                  </div>
                  <div class="media-body">
                    <h3 class="h5">Find free internet spot</h3>
                    <p>Don't use the internet on your phone? Find a public internet access point to use internet on the go.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                
                <div class="media templateux-media mb-4">
                  <div class="mr-4 icon">
                    <span class="icon-monitor display-3"></span>
                  </div>
                  <div class="media-body">
                    <h3 class="h5">Hotline Chat</h3>
                    <p>Ask someone to help you in a single click whenever you get some doubt.</p>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- END row -->

            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

@endsection
  
  
