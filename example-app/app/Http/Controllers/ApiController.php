<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ApiController
{
    protected object $response;
    public function __construct()
    {
        $this->response = Http::get('https://api.coindesk.com/v1/bpi/currentprice.json');
    }


    public function getRequestData()
    {
        return $this->response->json($key = null);

    }

    public function show_test()
    {
        //return view('test_api',);
        echo 'Noething to show here';
    }

}
