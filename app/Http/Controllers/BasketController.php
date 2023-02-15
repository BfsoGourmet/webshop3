<?php
 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
 
class BasketController extends Controller
{
    public function showBasket(Request $request, string $id): View
    {
        $value = $request->session()->get('key');
        return view('basket');
    }
    public function addItemToBasket(string $item){
        $newNumber = getNumberOfItems();
        $newNumber++;
        $request ->session()->put($newNUmber,$item);
        SetNumberOfItems($newNumber);
    }
    public function getNumberOfItems(){
        return $request->session()->get('length');
    }
    public function SetNumberOfItems(string $number){
        $request ->session()->put('length',$number);
    }
}