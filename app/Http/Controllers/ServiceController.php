<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Service;
use App\Servicethreats;
use App\Threats;

class ServiceController extends Controller
{
	// showing the main services page
	public function index()
	{
		$services = Service::all();
		return view('content/services', compact('services'));
	}

	// show individual services
	public function showService(Request $request, $id)
	{
		// find the setvice with ID
		$service = Service::find($id);

		// find the treats curresponding to the service. Join operation
		$threats = DB::table('services')
		->join('servicethreat', 'services.id', '=', 'servicethreat.service')
		->join('threats', 'servicethreat.threat', '=', 'threats.id')
		->select('services.id', 'servicethreat.id', 'threats.*')
		->where('services.id', '=', $id)
		->get();

		// formatting the text
		$service->service = str_replace('\' ', '\'', ucwords(str_replace('\'', '\' ', strtolower($service->service))));
		
		// wiki api 
		$url = 'http://en.wikipedia.org/w/api.php?action=query&prop=extracts|info&exintro&titles='.$service->wiki.'&format=json&explaintext&redirects&inprop=url';

		// converting the api response
		$data = file_get_contents($url);
		$data1 = json_decode($data);
		$data = get_object_vars($data1->query->pages);
		$keys = array_keys(get_object_vars($data1->query->pages));

		$wiki = $data[$keys[0]];;
		$pack = [
			'service'  => $service,
			'wiki'   => $wiki,
			'threats' => $threats
		];

		// returning with the parameters 
		return view('content/service')->with($pack);;
	}
}
