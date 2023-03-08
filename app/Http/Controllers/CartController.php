<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\DataController;

class CartController extends BaseController
{

    /**
     * Returns cart view
     */
    public static function returnCartView() {
        echo view('header');
        echo view('cart');
        echo view('footer');
    }

    /**
     * Update the Cart content
     * 
     * @param string $sku SKU of added Product
     * @param int $amountProducts amount of Products in the cart yet
     */
    public static function updateCart( $sku,$amountProducts) {
        // TODO, search for only sku $sku
        //$product_information = DataController::getProductFromSku($sku);
        session()->put('products.'.$sku,  $amountProducts);
        echo self::getCartTotal();
    }

    /**
     * Increments the amount of Products in the cart
     * 
     * @param string $sku
     */
    public static function addToCart($sku) {
        $amountProducts = intVal(session()->get('products.'.$sku));
        $amountProducts++;
        self::updateCart($sku,$amountProducts);
    }

    /**
     * Gets the total of products in the cart
     * 
     * @return int $totalInCart
     */
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

    /**
     * Remove the item with the given SKU from the cart
     * 
     * @param string $sku
     */
    public static function removeFromCart($sku) {
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

