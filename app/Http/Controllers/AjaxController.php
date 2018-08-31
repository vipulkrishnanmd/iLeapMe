<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tld;

class AjaxController extends Controller
{
    public function gettld(Request $request)
    {
    	// fetching data from the database
        $tld = Tld::find($request->tld);

        // if no records found
    	if($tld == null){
    		return response()->json(['tld'=>"No Record Available", 'country' => "", 'description' => ""]);
    	}

        // if the record is empty
    	if($tld->tld == ""){
    		$tld->tld = "Not Available";
    	}

        // if the descrioptio  is empty
    	if($tld->description == ""){
    		$tld->description = "Not Available";
    	}

        // if the country is empty
    	if($tld->country == ""){
    		$tld->country = "Not Available";
    	}

    // return
     return response()->json(['tld'=>$tld->tld, 'country' => $tld->country, 'description' => $tld->description]);
 }
}
