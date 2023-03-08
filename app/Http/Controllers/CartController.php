<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class CartController extends BaseController
{

    public static function returnCartView() {
        echo view('header');
        echo view('cart');
        echo view('footer');
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
}

