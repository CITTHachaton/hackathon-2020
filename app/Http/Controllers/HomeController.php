<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{

    private $URL_regions = "https://raw.githubusercontent.com/2x3-la/geo-chile/master/chile_with_regions.json";

    public function index(){
        return view('index');
    }

    public function regiones(){
        $client = new Client();
        $response = $client->request('GET', $this->URL_regions);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
    
        return $body;
    }
}
