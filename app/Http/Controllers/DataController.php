<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\FuncCall;

class DataController extends BaseController
{
    
    /**
     * Gets raw API request data
     * 
     * @param string $url
     * @return json
     */
    private static function getAPIData($url) {
        // For test
        $response = Http::get($url);
        return $response->json();

    }

    /**
     * Returns Product information from Produkt with given SKU
     * 
     * @param string $sku
     * @return array
     */
    public static function getProductFromSku($sku) {
        if (self::validateSKU($sku)) {
            $response = self::getAPIData('http://localhost/data.json'); // TODO, use Filterfunction from API
            return $response['products'];
        }
        else {
            return null;
        }
    }

    /**
     * Returns all Products in a Array
     * 
     * @return array
     */
    public static function getAllProducts() {
        $response = self::getAPIData('http://localhost/data.json');
        return $response['products'];
    }


    /**
     * Validates if SKU is set
     * 
     * @param string $sku
     * @return boolean
     */
    private static function validateSKU($sku) {
        // Code here ...
    }
}

