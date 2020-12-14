<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\Exception;

use App\Tld;
use App\Domain;
use App\Service;

class URLController extends Controller
{
	// function to get the tld details
	public function get_tld($domain){

		$array = explode(".", $domain);
        $suffix = end($array);

        // tld fetch starts here

    	// fetching data from the database
        $tld = Tld::find("." . $suffix);

        // if no records found
    	if($tld == null){
    		$tld = new Tld();
    	}

        // if the record is empty
    	if($tld->tld == ""){
    		$tld->tld = "No Records Available";
    	}

        // if the descrioptio  is empty
    	if($tld->description == ""){
    		$tld->description = "Not Available";
    	}

        // if the country is empty
    	if($tld->country == ""){
    		$tld->country = "Not Available";
    	}

    	$tld_code = '<div class="card border-secondary mb-3" style="max-width: 18rem;">
    	<div class="card-header">Top Level Domain</div>
    	<div class="card-body text-secondary">
    	<img src="images/successblack.png" alt="Domain" class="img-fluid mx-auto" width="100">
    	<br><br>
    	<h5 class="card-title text-secondary">'.$tld->tld.'</h5>
    	<p class="card-text">Country: '.$tld->country.' <br> Notes: '.$tld->description.'</p>
    	</div>
    	</div>';

    	return $tld_code;
	}


//***********************************************************************************************//
	// function to return the page rank
	public function get_pagerank($domain){

		// using php guzzle
		$opr_client = new \GuzzleHttp\Client();

		// api end point
		$opr_url = 'https://openpagerank.com/api/v1.0/getPageRank?domains[]='.$domain;

		// calling api
		$opr_res = $opr_client->request('GET', $opr_url, [
			'headers' => [
				'API-OPR' => ''
			]
		]);

		// getting data
		$opr_res_body = $opr_res->getBody();

		$opr_obj = json_decode($opr_res_body);

		$reputation = $opr_obj->response[0]->page_rank_integer;
		$rank =  $opr_obj->response[0]->rank;
		$safety_code = '';

		// if the entry is not there
		if($rank == null){
			$safety_code = '<div class="card text-danger border-danger mb-3" style="max-width: 18rem;">
			<div class="card-header">Reputation</div>
			<div class="card-body">
			<img src="images/error.png" alt="Free Template" class="img-fluid mx-auto" width="100">
			<br><br>
			<h5 class="card-title text-danger">Unknown Site</h5>
			<p class="card-text">We recommend not to go to this site unless you are sure.</p>
			</div>
			</div>';
		}

		// if high reputation
		elseif($reputation > 6){
			$safety_code = '<div class="card text-success border-success mb-3" style="max-width: 18rem;">
			<div class="card-header">Reputation</div>
			<div class="card-body">
			<img src="images/success.png" alt="Free Template" class="img-fluid mx-auto" width="100">
			<br><br>
			<h5 class="card-title text-success">Highly Reputed Site</h5>
			<p class="card-text">The site has a Page Rank of '.$rank.' which is comparitively very high. We use Open Page Rank service for determining the page rank.</p>
			</div>
			</div>';
		}

		// if average reputation
		elseif ($reputation > 3) {
			$safety_code = '<div class="card border-secondary mb-3" style="max-width: 18rem;">
			<div class="card-header">Reputation</div>
			<div class="card-body text-secondary">
			<img src="images/successblack.png" alt="Domain" class="img-fluid mx-auto" width="100">
			<br><br>
			<h5 class="card-title text-secondary">Average Reputed Site</h5>
			<p class="card-text">The site has a Page Rank of '.$rank.' and a usage rating of '.$reputation.'/10. We use Open Page Rank service for determining the page rank.</p>
			</div>
			</div>';
		}

		// if below average reputation
		elseif ($reputation > 0){
			$safety_code = '<div class="card border-warning mb-3" style="max-width: 18rem;">
			<div class="card-header">Reputation</div>
			<div class="card-body text-secondary">
			<img src="images/exclamation.png" alt="Domain" class="img-fluid mx-auto" width="100">
			<br><br>
			<h5 class="card-title text-warning">Poor Reputation</h5>
			<p class="card-text">The site has a usage rating of '.$reputation.'/10. This is normal if it is the website of some local business but not a reputes online service.</p>
			</div>
			</div>'; 
		}

		return $safety_code;
	}

//**************************************************************************************************//

	// google safe browse analysis code
	public function get_safety($url){

		// creating api client
		$gsb_client = new \GuzzleHttp\Client();

		// creating the request body
        $gsb_body_json = '{
            "client": {
              "clientId":      "ileapforelderly",
              "clientVersion": "1.0.0"
              },
              "threatInfo": {
                  "threatTypes":      ["MALWARE", "SOCIAL_ENGINEERING", "UNWANTED_SOFTWARE", "POTENTIALLY_HARMFUL_APPLICATION"],
                  "platformTypes":    ["ANY_PLATFORM"],
                  "threatEntryTypes": ["URL"],
                  "threatEntries": [
                  {"url": "'.$url.'"}
                  ]
              }
          }';

        // calling the api 
        $gsb_body = json_decode($gsb_body_json, true);
          
        $gsb_res = $gsb_client->request('POST', 'https://safebrowsing.googleapis.com/v4/threatMatches:find?key=', ['json' => $gsb_body]);
        $gsb_res_body = $gsb_res->getBody();

        $gsb_res_obj = json_decode($gsb_res_body);
        $gsb_res_arr = (array)$gsb_res_obj;

        // if nothing is there, making dummy
        if (empty($gsb_res_arr)) {
            $dummy = '{
                "matches": [
                {
                    "threatType": "None"
                    }
                    ]
                }';
            $gsb_res_obj = json_decode($dummy);
        }


        $match_arr = array();
        foreach($gsb_res_obj->matches as $match){
            array_push($match_arr, $match->threatType);
        }

        $gsb_code = '';

        // making gsb code
        if(empty($gsb_res_arr)){
            $gsb_code = '<div class="card border-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header">Safety</div>
      <div class="card-body text-secondary">
        <img src="images/successblack.png" alt="Free Template" class="img-fluid mx-auto" width="100">
        <br><br>
        <h5 class="card-title text-secondary">No threats detected</h5>
        <p class="card-text">We couldnt find any threat records for this website.</p>
      </div>
    </div>';
        }
        else{
            $gsb_code = '<div class="card border-danger mb-3" style="max-width: 18rem;">
      <div class="card-header text-danger">Safety</div>
      <div class="card-body text-danger">
        <img src="images/error.png" alt="Free Template" class="img-fluid mx-auto" width="100">
        <br><br>
        <h5 class="card-title text-danger">Threat Detected</h5>
        <p class="card-text">Some threat detected</p>
      </div>
    </div>';
        }

        return $gsb_code;
	}

//*************************************************************************************************

	// function to detect the ads on the page content
	public function get_ad($url){

		//$page_content =  file_get_contents($url);

		//collecting the page contents
		$ch= curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		$page_content = curl_exec($ch);
		if (curl_errno($ch)){
			//echo curl_error($ch);
			//echo "\n<br/>";
			$page_content = '';
		}else {
			curl_close($ch);
		}
		if(!is_string($page_content)|| !strlen($page_content)){
			//echo "Failed to get contents.";
			$page_content = '';
		}

        $ad_code = '';

        // mtching with common ad keywords and making the adcode
        if (preg_match('(googletag.pubads|googlesyndication|trafficfactory|buysellads.com)', $page_content) === 1) {
            $ad_code = '<div class="card text-warning border-warning mb-3" style="max-width: 18rem;">
        <div class="card-header">Advertisements</div>
        <div class="card-body">
          <img src="images/exclamation.png" alt="Free Template" class="img-fluid mx-auto" width="100">
          <br><br>
          <h5 class="card-title text-warning">Site Contains Advertisements</h5>
          <p class="card-text">Please be careful. You may be tricked to go to some third party web pages.</p>
        </div>
      </div>';
        }
        else{
            $ad_code = '<div class="card text-secondary border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">Advertisements</div>
        <div class="card-body">
          <img src="images/successblack.png" alt="Free Template" class="img-fluid mx-auto" width="100">
          <br><br>
          <h5 class="card-title text-secondary">No Ads Found</h5>
          <p class="card-text">Couldnt find any ad. But still may be present.</p>
        </div>
      </div>';
        }


		$pop_code = '';

        //popup detection with regex
        if (preg_match('(popads.net)', $page_content) === 1) {
            $pop_code = '<div class="card text-warning border-warning mb-3" style="max-width: 18rem;">
        <div class="card-header">Pop Ups</div>
        <div class="card-body">
          <img src="images/exclamation.png" alt="Free Template" class="img-fluid mx-auto" width="100">
          <br><br>
          <h5 class="card-title text-warning">Site Contains Pop Ups</h5>
          <p class="card-text">There can be irritating pop ups. These can be advertisements or some other contenrs</p>
        </div>
      </div>';
        }
        else{
            $pop_code = '<div class="card text-secondary border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">Pop Ups</div>
        <div class="card-body">
          <img src="images/successblack.png" alt="Free Template" class="img-fluid mx-auto" width="100">
          <br><br>
          <h5 class="card-title text-secondary">No Pop Ups Found</h5>
          <p class="card-text">Couldnt find any Pop ups. But still may be present.</p>
        </div>
      </div>';
        }

        return array($ad_code, $pop_code);
    }

 //*****************************************************************************************************
	
// get category code
	public function get_cat($domain){

		// for category type
		$content_good = '';

		// makes the initial code
		$cat_code = '<div class="w3-bar w3-dark-gray">
              <div class="w3-bar-item">The site belongs to the below category</div>
              </div>  
              <br><div class="row">';

        // checking on the local open data
        $domainc = Domain::find($domain);

        // if found, uses it and makes the code
        if($domainc != null){

          $domArray =  explode(",", $domainc->category);
          foreach ($domArray as $cat) {
                if($cat != ""){
                 $service = Service::where('webshrinker', $cat)->first();
                 $cat_code = $cat_code.'<div class="col-lg-6">
                 <div class="media templateux-media mb-4">
                 <div class="mr-4 icon">
                 <span class="icon-command display-3"></span>
                 </div>
                 <div class="media-body">
                 <h3 class="h5">'.$service->service.'</h3>
                 <p>'.$service->description.'</p><p> <a href="'.url('service/'.$service->id).'">Learn More</a></p>
                 </div>
                 </div>
                 </div>';
                 if($cat == 'adult' || $cat == 'illegalcontent'){
                    $content_good = $cat;
                 }
            }
        }
      }

      	// else uses the API
        else{

          $access_key = "";
          $secret_key = "";

          $url = $domain;

// setting up the options and parameters

          $options=array();

          $options['key'] = $access_key;

          $options['taxonomy'] = "webshrinker";

          $parameters = http_build_query($options);

          $request = sprintf("categories/v3/%s?%s", base64_encode($url), $parameters);
          $hash = md5(sprintf("%s:%s", $secret_key, $request));

          $request= "https://api.webshrinker.com/{$request}&hash={$hash}";

// Initialize cURL and use pre-signed URL authentication
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $request);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

          $response = curl_exec($ch);
          $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

          switch($status_code) {

          	//on success get the content, update the db
            case 200:
              
              $cat_response = json_decode($response);

              $category = ""; 
              foreach ($cat_response->data[0]->categories as $cat) {
                if($cat->id != ""){
                 $category = $category.",".$cat->id;
                 $service = Service::where('webshrinker', $cat->id)->first();

                 $cat_code = $cat_code.'<div class="col-lg-6">
                 <div class="media templateux-media mb-4">
                 <div class="mr-4 icon">
                 <span class="icon-command display-3"></span>
                 </div>
                 <div class="media-body">
                 <h3 class="h5">'.$service->service.'</h3>
                 <p>'.$service->description.'</p><p> <a href="'.url('service/'.$service->id).'">Learn More</a></p>
                 </div>
                 </div>
                 </div>';

                 // check for content type issues 
                 if($cat->id == 'adult' || $cat->id == 'illegalcontent'){
                    $content_good = $cat->id;
                 }
               }
              }
              $dom = new Domain();
              $dom->domain = $domain;
              $dom->category = $category;
              $dom->save(); 

              break;


            case 400:
        // Bad or malformed HTTP request
            break;
            case 401:
        // Unauthorized
            break;
            case 402:
        // Request limit reached
            break;
          }

        }

        $cat_code = $cat_code.'</div>';


        // category analysis ends here

        // content analysis code
        $content_code = '';

        // uses the parameter from the above code and generates code for content
        if($content_good == ''){
          $content_code =  '<div class="card border-secondary mb-3" style="max-width: 18rem;">
          <div class="card-header">Content Type</div>
          <div class="card-body text-secondary">
          <img src="images/successblack.png" alt="Free Template" class="img-fluid mx-auto" width="100">
          <br><br>
          <h5 class="card-title text-secondary">No Bad Content</h5>
          <p class="card-text">We couldnt find any inapropriate content</p>
          </div>
          </div>';
        }
        else{
          $content_code = '<div class="card border-warning mb-3" style="max-width: 18rem;">
          <div class="card-header text-warning">Content Type</div>
          <div class="card-body text-warning">
          <img src="images/exclamation.png" alt="Free Template" class="img-fluid mx-auto" width="100">
          <br><br>
          <h5 class="card-title text-warning">Warning</h5>
          <p class="card-text">The content may not be appropriate for you.</p>
          </div>
          </div>';
        }

        return array($cat_code, $content_code);

	}

//********************************************************************************************************

	public function urlcheck(Request $request){

		// making initial code
		$code = '<div id="card_section"><br><br>
		<section class="templateux-portfolio-overlap mb-5" id="next">
		<div class="container-fluid">
		<div class="col-md-12" data-aos="fade-up" data-aos-delay="100">';

		try{
		// getting url and domain name
		$domain = parse_url($request->url, PHP_URL_HOST);
		$url = $request->url;

		// other necessary codes
		$row_sep_code = '</div>
		</div>
		<div class="card-deck text-center">
		<div class="row mx-auto">';

		$final_code = '</div>
		</div>
		</section>
		</div>';

		$details_start_code = '<br>
		<div class="w3-bar w3-dark-gray">
		<div class="w3-bar-item">Details about the site</div>
		</div> 
		<br><div class="card-deck text-center">
		<div class="row mx-auto">';

		// calling the required functions
		$array = $this->get_cat($domain);

		$cat_code = $array[0];

		$gsb_code = $this->get_safety($url);

		$safety_code = $this->get_pagerank($domain);

		$array_ad = $this->get_ad($url);

		$ad_code = $array_ad[0];

		$content_code = $array[1];

		$pop_code = $array_ad[1];

		$tld_code = $this->get_tld($domain);


		// creatin the overall code
		$code = $code.$cat_code.$details_start_code.$gsb_code.$safety_code.$ad_code.$row_sep_code.$content_code.$pop_code.$tld_code.$final_code;
		}
		catch(\Exception $e){
			$code = '<div id="card_section"><h3 style="text-align:center" class="text-danger">Something Went Wrong</h3></div>';
		}
		finally{
        	// return
        	return response()->json(['code' => $code]);
    	}
	}

//****************************************************************************************************

	// function for the extension's checking
	public function extApiGet(Request $request){
      
      $domain = parse_url($request->url, PHP_URL_HOST);

      $opr_client = new \GuzzleHttp\Client();

      // creating api end point
      $opr_url = 'https://openpagerank.com/api/v1.0/getPageRank?domains[]='.$domain;

      // calling api
      $opr_res = $opr_client->request('GET', $opr_url, [
            'headers' => [
                'API-OPR' => ''
            ]
      ]);

      // retrieving results
      $opr_res_body = $opr_res->getBody();

      $opr_obj = json_decode($opr_res_body);

      $reputation = $opr_obj->response[0]->page_rank_integer;
      $data = 'no';
      if ($reputation == null){
        $data = 'yes';
      }
      elseif ((int)$reputation < 4) {
        $data = 'yes';
      }

      // returns the view
      return view('content.extapi', ['data' => $data]);
    }

//*******************************************************************************************************
    // function for extended checking
    public function extendedCheck(Request $request){

		try{
		// making initial code
		$code = '<div id="card_section"><br><br>
		<section class="templateux-portfolio-overlap mb-5" id="next">
		<div class="container-fluid">
		<div class="col-md-12" data-aos="fade-up" data-aos-delay="100">';

		// getting url and domain name
		$domain = parse_url($request->url, PHP_URL_HOST);
		$url = $request->url;

		// other necessary codes
		$row_sep_code = '</div>
		</div>
		<div class="card-deck text-center">
		<div class="row mx-auto">';

		$final_code = '</div>
		</div>
		</section>
		</div>';

		$details_start_code = '<br>
		<div class="w3-bar w3-dark-gray">
		<div class="w3-bar-item">Details about the site</div>
		</div> 
		<br><div class="card-deck text-center">
		<div class="row mx-auto">';

		// calling the required functions
		$array = $this->get_cat($domain);

		$cat_code = $array[0];

		$gsb_code = $this->get_safety($url);

		$safety_code = $this->get_pagerank($domain);

		$array_ad = $this->get_ad($url);

		$ad_code = $array_ad[0];

		$content_code = $array[1];

		$pop_code = $array_ad[1];

		$tld_code = $this->get_tld($domain);


		// creatin the overall code
		$code = $code.$cat_code.$details_start_code.$gsb_code.$safety_code.$ad_code.$row_sep_code.$content_code.$pop_code.$tld_code.$final_code;

		$pack = [
			'code' => $code
		];
		// returning with the parameters 
		return view('content/extendedcheck')->with($pack);
		}
		catch(\Exception $e){
			$pack = [
			'code' => '<div id="card_section"><h3 style="text-align:center" class="text-danger">Something Went Wrong</h3></div>'
		];
		// returning with the parameters 
		return view('content/extendedcheck')->with($pack);
		}
    }
}



