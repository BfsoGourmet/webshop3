<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\DataController;

class ProductListController extends BaseController
{
    //use AuthorizesRequests, ValidatesRequests;

    public static function returnView() {
        echo view('header');
        self::returnProductList();
        echo view('footer');
    }

    private static function returnProductList() {
        $result = DataController::getAPI('http://localhost/data.json');

        $products = $result['products'];

        echo view('list')->with('products', $products);
    }

    public static function test() {
        print_r(session()->get('products'));
        session()->flush();
    }
}

