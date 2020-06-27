<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{

    private $URL_regions = "https://raw.githubusercontent.com/2x3-la/geo-chile/master/chile_with_regions.json";
    private $URL_covid = "https://raw.githubusercontent.com/MinCiencia/Datos-COVID19/master/output/producto2/2020-03-30-CasosConfirmados.csv";

    public function index(){
        return view('index');
    }

    public function regiones(){
        $client = new Client();
        $response = $client->request('GET', $this->URL_regions);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        //$body->header('Content-Type', 'application/json');
        // $body = json_encode($body);
        return $body;
    }

    public function covid(){
        $client = new Client();
        $response = $client->request('GET', $this->URL_covid);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        return $body;

        
    }


    public function presentacion(){
        return view('web');
    }

}
