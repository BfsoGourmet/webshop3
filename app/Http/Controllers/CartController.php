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
        return self::returnCartList();
    }

    private static function returnCartList() {
        if (!isset(session()->all()['products']))
            return view('cart')->with('products', false);
        else    
            return view('cart')->with('products', session()->all()['products']);
    }

    /**
     * Update the Cart content
     * 
     * @param string $sku SKU of added Product
     * @param int $amountProducts amount of Products in the cart yet
     */
    public static function updateCart( $sku,$amountProducts) {
        // TODO, search for only sku $sku
        $product_information = DataController::getProductFromSku($sku);
        if (!$product_information) {
            echo 'Server error';
        }
        else {
            if ($amountProducts > 0) {
                session()->put('products.'.$sku.'.amount',  $amountProducts);
                session()->put('products.'.$sku.'.info', $product_information);
                echo self::getCartTotal();
            } 
        }
    }

    /**
     * Increments the amount of Products in the cart
     * 
     * @param string $sku
     */
    public static function addToCart($sku) {
        $amountProducts = intVal(session()->get('products.'.$sku.'.amount'));
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
            foreach ($products as $sku) {
                if (isset($sku['amount']))
                    $totalInCart += $sku['amount'];
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
        $amountProducts = intVal(session()->get('products.'.$sku.'.amount'));
        if ($amountProducts >= 0);
            session()->flash('products.'.$sku.'.amount', --$amountProducts);
        
    }
}

