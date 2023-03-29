<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\DataController;

class CredentialController extends BaseController
{

    private $firstname;
    private $lastname;
    private $email;
    private $address;
    private $country;
    private $place;
    private $zip;
    private $ccName;
    private $ccNumber;
    private $ccExpiration;
    private $ccCVV;
    private $deliveryID;


    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function setPlace($place) {
        $this->place = $place;
    }

    public function setZip($zip) {
        $this->zip = $zip;
    }

    public function setCcName($ccName) {
        $this->ccName = $ccName;
    }

    public function setCcNumber($ccNumber) {
        $this->ccNumber = $ccNumber;
    }

    public function setCcExpiration($ccExpiration) {
        $this->ccExpiration = $ccExpiration;
    }

    public function setCcCVV($ccCVV) {
        $this->ccCVV = $ccCVV;
    }

    public function setDeliveryID($deliveryID) {
        $this->deliveryID = $deliveryID;
    }
    
    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getPlace() {
        return $this->place;
    }

    public function getZip() {
        return $this->zip;
    }

    public function getCcName() {
        return $this->ccName;
    }

    public function getCcNumber() {
        return $this->ccNumber;
    }

    public function getCcExpiration() {
        return $this->ccExpiration;
    }

    public function getCcCVV() {
        return $this->ccCVV;
    }

    public function getDeliveryID() {
        return $this->deliveryID;
    }

}