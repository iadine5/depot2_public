<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Ceci est juste mais non sécurisé
        //$response = Http::get('http://127.0.0.1:81/gn_hotel_api/public/api/list_vente');
        //$response = Http::withBasicAuth('api_admin','Pass1234')->get('http://127.0.0.1:81/gn_hotel_api/public/api/list_vente');
        
        
        $response = Http::withBasicAuth('api_admin','Pass1234')->get('http://172.27.156.43:81/gn_hotel_api/public/api/list_vente');
        
        $jsonData = $response->json();

        //pour les requêtes post ("enregistrement")
        //$p = Http::withBasicAuth('api_admin','Pass1234')->post('url', []);
        
        dd($jsonData);

        //return view('vente.index', ['ventes'=>$jsonData['ventes']]);
        //return view('vente.index');
    }
}