<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tld;

class AjaxController extends Controller
{
    public function gettld(Request $request)
    {
    	$tld = Tld::find($request->tld);

      	return response()->json(['success'=>$tld->description]);
    }
}
