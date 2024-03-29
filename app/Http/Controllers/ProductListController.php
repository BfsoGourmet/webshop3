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
        $result = DataController::getAllProducts();

        if (!$result)
            echo view('server_error');
        else
            echo view('list')->with('products', $result);

    }

    public static function test() {
        print_r(session()->get('products'));
        session()->flush();
    }
}

