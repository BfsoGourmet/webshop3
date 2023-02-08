<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ApiController;
class ProductController extends Controller
{
    public function __construct()
    {

    }

    public function return_view()
    {
        return view('elements/search',);
    }
    /*
        webshop.ch/product/

        Produkt-Detailansicht
        GET wawi.ch/product/s

        Produktauflistung
        GET wawi.ch/product?search=blablabla&limit=9&page=2
     */

}
