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
        $orderJSON = $this->generateJSON();
        $response = Http::withBody($orderJSON,'application/json')->post(config('global.wawi_api_url').'delivery/');
        if (isset(json_decode($response, true)['state']) == 'OK') {
            $this->credential->setDeliveryID(json_decode($response, true)['delivery_id']);
            $this->sendMail();
        }
        else {
            echo 'Order error';
            exit();
        }
    }

    private function generateJSON()
    {
        $orderJSON = '
        {
            "fname": "'.$this->credential->getFirstname().'",
            "lname": "'.$this->credential->getLastname().'",
            "city": "'.$this->credential->getPlace().'",
            "zip": "'.$this->credential->getZip().'",
            "country": "'.$this->credential->getCountry().'",
            "address": "'.$this->credential->getAddress().'",
            "products": [';
        
        foreach (session()->all()['products'] as $product) {
           $orderJSON .= '{
                    "sku": "'.$product["info"]["sku"].'",
                    "amount": "'.$product["amount"].'"
                },';
        }
        $orderJSON = rtrim($orderJSON,",");
        $orderJSON .=']}';

        return $orderJSON;
    }

    public function sendMail() {
        Mail::send(new OrderConfirmation($this->credential));
    }
}