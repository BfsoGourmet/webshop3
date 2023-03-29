<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\DataController;
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends BaseController
{

    private CredentialController $credential;

    public function __construct($credential) {
        $this->credential = $credential;
    }

    public function makeCheckout() {
        
    }

    public function sendMail() {
        Mail::send(new OrderConfirmation($this->credential));
    }
}