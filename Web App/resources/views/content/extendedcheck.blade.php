@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/w3.css')}}">

<div class="container">
  <section class="templateux-hero"  data-scrollax-parent="true">
    <!-- Heading and Text -->
    <div class="container">
      <div class="row align-items-center justify-content-center intro">
        <div class="col-md-10" data-aos="fade-up">

          <h1>Good Job!&nbsp;&nbsp;<img src="{{asset('images/success.png')}}" width="10%"></h1>
          <p class="lead">It is always a good idea to know about a website before you go there. Knowing more about  websites keeps you safe in the internet. <br> Please find the details below.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sectionn for the report code -->
  {!! $code !!}
  
</div>
@endsection