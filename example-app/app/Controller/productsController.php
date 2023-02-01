<?php namespace App\Controller;

use Core\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller {

    public function __constructor(Product $productClass)
    {
        $this->productClass = $productClass; 
    }
}