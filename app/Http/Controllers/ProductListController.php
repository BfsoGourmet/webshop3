<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;

class ProductListController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public static function returnView() {
        echo view('header');
        echo view('footer');
    }
    public static function test() {
    }
}

