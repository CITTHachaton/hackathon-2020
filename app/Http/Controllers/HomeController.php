<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

use App\Hospital;

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

    public function new_hospitales(){
        // $h1 = new Hospital();
        // $h1->name = "Hospital Dr. Exequiel González Cortés";
        // $h1->lat = "-33,484805";
        // $h1->lon = "-70,648188";
        // $h1->save();

        $h1 = new Hospital();
        $h1->name = "Hospital Dr. Exequiel González Cortés";
        $h1->lat = "-33,484805";
        $h1->lon = "-70,648188";
        $h1->save();

    }


    public function hospitales(){
        $hospitales = Hospital::get();        
        return $hospitales;
    }

}