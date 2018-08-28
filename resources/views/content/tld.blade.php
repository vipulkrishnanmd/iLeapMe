@extends('layouts.app')
@section('content')

    <br/>
  <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords" id="tld">
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

  
                    <div class="jumbotron col-md-6 offset-md-3" id="msg">
                      <h2>Please enter the TLD and hit search!</h2>
                      <p id="p1"></p>
                      <p id="p2"></p>
                    </div>
                  </div>

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
                  result = null;
                  }});
               });
            });
      </script>
@endsection