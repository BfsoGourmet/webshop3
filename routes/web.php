<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductListController;

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
    ProductListController::returnView();
});

// TODO, Detail view function
Route::get('/product', function () {
    ProductListController::returnView();
});


