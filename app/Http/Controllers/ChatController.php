<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
	// function to show the chat pages
	public function index(Request $request){

		// if the request has code as the parameter
		if ($request->has('code')){
			$pack = [
			'ileapcode' => $request->code,
			'url' => $request->url,
			'report' => 'https://ileap.me/extendedcheck?url='.$request->url
			];

			//show the chat box page and pass the parameters
    		return view('content/chat')->with($pack);
		}

		// if the request is an empty request
		else{
			// show the page to manually enter the chat code
			return view('content/chatwithcode');
		}
	}
}
