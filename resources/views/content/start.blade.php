@extends('layouts.app')

@section('content')
    <!-- END templateux-navbar -->
    <section class="templateux-hero">
      <div class="container">
        <div class="row align-items-center justify-content-center intro">
          <div class="col-md-10" data-aos="fade-up">
            <h1>Welcome to Your Safe Internet! No more worries about your digital security.</h1>
            <a href="#next" class="go-down js-smoothscroll"></a>
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
            <a class="project animsition-link" href="work-single.html">
              <figure>
                <img src="images/older.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>Keep smiling!</h2>
                  <span>:)</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <a class="project animsition-link" href="work-single.html">
              <figure>
                <img src="images/com.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>Something else</h2>
                  <span>View</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <a class="project animsition-link" href="work-single.html">
              <figure>
                <img src="images/hero_1.jpg" alt="Free Template" class="img-fluid">  
              </figure>
              <div class="project-hover">
                <div class="project-hover-inner">
                  <h2>Something else</h2>
                  <span>View</span>
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
                <h2 class="mb-5">We make our seniors safe on the internet. We provide them tools and tricks to stay safe online.</h2>
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
                    <p>Ensure a website is safe and good for you before going to it. We inform you all you wnat to know about a website</p>
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
                    <p>Dont use the internet on your phone? Find a public internet access point to use internet on the go.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                
                <div class="media templateux-media mb-4">
                  <div class="mr-4 icon">
                    <span class="icon-monitor display-3"></span>
                  </div>
                  <div class="media-body">
                    <h3 class="h5">Safe search engine</h3>
                    <p>Surf the internet with a safe search engine exclussively designed for the seniors</p>
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
  
  