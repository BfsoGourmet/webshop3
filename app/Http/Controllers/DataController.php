<?php

namespace App\Http\Controllers;

use ErrorException;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\global;

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
        try {
            if (!$response = Http::get($url))
                throw new ErrorException('error');
        }
        catch(Exception $e) {
            return false;
        }
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
            if (!$response = self::getAPIData(config('global.wawi_api_url').'product/'.$sku))
                return false;

            return $response['data'];
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
        $response = self::getAPIData(config('global.wawi_api_url').'products');
        if (!$response)
            return false;
            
        return $response['data'];
    }


    /**
     * Validates if SKU is set
     * 
     * @param string $sku
     * @return boolean
     */
    private static function validateSKU($sku) {
        return true;
    }
}

