<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\CartController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    ProductListController::returnView();
});

// TODO, Search function
Route::get('/search', function () {
    ProductListController::returnView();
});

// TODO, Checkout view function
Route::get('/checkout', function () {
    CartController::returnCartView();
});

// TODO, Detail view function
Route::get('/product', function () {
    ProductListController::returnView();
});

// TODO, Detail view function
Route::get('/intoCart/{sku}', function (string $sku) {
    CartController::addToCart($sku);
});

// TODO, Detail view function
Route::get('/outOfCart/{sku}', function (string $sku) {
    CartController::removeFromCart($sku);
});


// TODO, Detail view function
Route::get('/test', function () {
    //echo view('header');
    echo view('server_error');
});

