<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tld;

class AjaxController extends Controller
{
    public function gettld(Request $request)
    {
    	$tld = Tld::find($request->tld);

    	if($tld == null){
    		return response()->json(['tld'=>"No Record Available", 'country' => "", 'description' => ""]);
    	}
    	if($tld->tld == ""){
    		$tld->tld = "Not Available";
    	}
    	if($tld->description == ""){
    		$tld->description = "Not Available";
    	}
    	if($tld->country == ""){
    		$tld->country = "Not Available";
    	}

      	return response()->json(['tld'=>$tld->tld, 'country' => $tld->country, 'description' => $tld->description]);
    }
}
