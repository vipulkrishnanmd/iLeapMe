<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
	public function index(Request $request){
		if ($request->has('code')){
			$pack = [
			'ileapcode' => $request->code,
			'url' => $request->url,
			'report' => 'https://ileap.me/extendedcheck?url='.$request->url
			];

    		return view('content/chat')->with($pack);
		}

		else{
			return view('content/chatwithcode');
		}
	}
}
