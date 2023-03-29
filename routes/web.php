<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CredentialController;
use App\Http\Controllers\CheckoutController;
use App\Mail\OrderConfirmation;
use Illuminate\Contracts\Mail\Mailer as MailMailer;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;

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
    return ProductListController::returnView();
});

// TODO, Search function
Route::get('/search', function () {
    return ProductListController::returnView();
});

// TODO, Checkout view function
Route::get('/checkout', function () {
    return CartController::returnCartView();
});

Route::get('/checkout/process', function () {
    $crd = new CredentialController();
    $crd->setFirstname($_GET['firstName']);
    $crd->setLastname($_GET['lastName']);
    $crd->setEmail($_GET['email']);
    $crd->setAddress($_GET['address']);
    $crd->setCountry($_GET['country']);
    $crd->setPlace($_GET['place']);
    $crd->setZip($_GET['zip']);
    $crd->setCcName($_GET['cc-name']);
    $crd->setCcNumber($_GET['cc-number']);
    $crd->setCcExpiration($_GET['cc-expiration']);
    $crd->setCcCVV($_GET['cc-cvv']);
    $checkout = new CheckoutController($crd);
    $checkout->makeCheckout();
    return view('mail')->with('credential', $crd);
});

// TODO, Detail view function
Route::get('/product', function () {
    return ProductListController::returnView();
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
    echo 'test';
});

