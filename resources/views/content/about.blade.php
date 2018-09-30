@extends('layouts.app')

@section('content')

<!-- Page for showing the about -->

<div class="container">

  <section class="templateux-hero"  data-scrollax-parent="true">
    <!-- Heading and Text -->

    <div class="container">
      <div class="row align-items-center justify-content-center intro">
        <div class="col-md-10" data-aos="fade-up">
          <h1>About</h1>
          <p class="lead">iLeap is a web application developed to assist the elderly people to sefely use internet. Over the years there has been a large increase in the number of cyber crimes targetting the elderly people. iLeap would be a solution for this.</p>

          <div class="row justify-content-center">
            <div id='loading' class="text-center"><br><br></div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Dummy -->
  <div id="card_section">
    <section class="templateux-portfolio-overlap mb-5" id="next">
      <div class="container-fluid">
        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
          
        </div>
      </div>
    </section>
  </div>


</div>


@endsection