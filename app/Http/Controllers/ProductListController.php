<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class ProductListController extends BaseController
{
    //use AuthorizesRequests, ValidatesRequests;

    public static function returnView() {
        echo view('header');
        self::returnProductList();
        echo view('footer');
    }

    private static function getAPI($url) {
        // For test
        $response = Http::get($url);
        return $response->json();

    }

    private static function returnProductList() {
        $result = self::getAPI('https://dro.pm/b');

        $products = $result['products'];

        echo view('list')->with('products', $products);
    }

    public static function test() {

    }
}

