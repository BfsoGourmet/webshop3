<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
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

    public static function returnCartView() {
        echo view('header');
        echo view('cart');
        echo view('footer');
    }

    private static function getAPI($url) {
        // For test
        $response = Http::get($url);
        return $response->json();

    }

    private static function returnProductList() {
        $result = self::getAPI('http://localhost/data.json');

        $products = $result['products'];

        echo view('list')->with('products', $products);
    }

    public static function updateCart( $sku,$amountProducts) {
        session()->put('products.'.$sku,  $amountProducts);
        echo self::getCartTotal();
    }

    public static function addToCart( $sku) {
        $amountProducts = intVal(session()->get('products.'.$sku));
        $amountProducts++;
        self::updateCart($sku,$amountProducts);
    }

    public static function getCartTotal() {
        $products = session()->get('products');
        $totalInCart = 0;
        if ($products != null){
            foreach ($products as $productSKU => $amount) {
               $totalInCart += $amount;
            }
        }
        return $totalInCart;
    }

    public static function removeFromCart( $sku) {
        $amountProducts = intVal(session()->get('products.'.$sku));
        $amountProducts--;
        if ($amountProducts <= 0) {
            session()->remove('products.'.$sku);
        }
        else {
            self::updateCart($sku,$amountProducts);
        }
    }

    public static function test() {
        print_r(session()->get('products'));
        session()->flush();
    }
}

