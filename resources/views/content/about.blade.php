@extends('layouts.app')

@section('content')

<!-- Page for showing the about -->

<div class="container">

  <section class="templateux-hero"  data-scrollax-parent="true">
    <!-- Heading and Text -->

    <div class="container">
      <div class="row align-items-center justify-content-center intro">
        <div class="col-md-12" data-aos="fade-up">
          <h1>About</h1>
          <p class="lead">iLeapMe is a web application developed to assist the elderly people to safely use internet. Over the years there has been a large increase in the number of cybercrimes targeting the elderly people. iLeapMe would be a solution for this.</p>
          <a href="#next" class="go-down js-smoothscroll"></a>

          <div class="row justify-content-center">
            <div id='loading' class="text-center"><br><br></div>
          </div>
        </div>
      </div>
    </div>
  </section>

   <!-- Details section -->
  <section class="templateux-portfolio-overlap mb-5" id="next">
    <div id="blog" class="site-section">
      <div class="container">

        <div class="row">

           <!-- Attributions and data sources -->
          <div class="col-md-12" data-aos="fade-up">

            <h2 class="mb-3 mt-5 mb-3">Data Sources and Attributions</h2>
            <p>iLeapMe uses data mainly from open sources and free APIs. As most of the data sources are APIs from well-known sources, we are able to maintain the quality of the results. However, we provide no guarantee for the reliability and accuracy of the services. By accessing or using this website you agree to be bound by the terms and conditions of all our data sources as well. Please see the details below.</p>

            <p><b>Google Safe Browse API</b>: Safe Browsing is a Google service that lets client applications check URLs against Google's constantly updated lists of unsafe web resources. Examples of unsafe web resources are social engineering sites (phishing and deceptive sites) and sites that host malware or unwanted software.</p>

            <p><b>Open Page Rank API</b>: Open Page Rank is a project to rank the web pages. The project has been running for more than 7 years and already more than 3 billion web pages are in their database. Please see more details <a href="https://www.domcop.com/openpagerank/what-is-openpagerank">here</a></p>

            <p><b>Wikipedia API</b>: Wikipedia provides a free API for getting encyclopedia contents. We use this service for providing more details about various topics.</p>

            <p><b>Phishtank API</b>: Phishtank API gives details about latest phishes. Most of the phishes are reported by the users themselves. Please see more details <a href = "https://www.phishtank.com">here</a></p>

            <p><b>Université Toulouse 1 Capitole Black-list</b>: The Université Toulouse 1 Capitole propose a blacklist managed by Fabrice Prigent from many years, to help administrator to regulate Internet use. This database, often used in school, can be used with many commercial or free software. We use this as a web categorisation data.</p>

            <p><b>Victorian Public Internet Access Locations Dataset from data.gov.au</b>: This dataset provides details about free desktop internet access across Victoria. The data also includes information such as availability of training, accessibility options etc.</p>

            <p><b>TLD dataset wrangled from iana.org and wikipedia.org</b>: This provides details about various top level domains used in URLs</p>

            <p><b>Open Street Map</b>: We use the map provided by www.openstreetmap.org along with the APIs provided by Mapbox.com</p>



          </div> <!-- .col-md-8 -->


        </div>


      </div>
    </div>

  </section>

</div>


@endsection
