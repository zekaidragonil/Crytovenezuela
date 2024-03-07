<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class MonitorController extends Controller

{
    public function index()
    {  
        $cliente = new Client();
        $response = $cliente->get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=500&page=1&sparkline=false');
        $data =json_decode($response->getBody());
        return view('Monitor', compact('data'));

    }
    
}
