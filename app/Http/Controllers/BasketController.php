<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
 
class BasketController extends Controller
{
    public function showBasket(Request $request):View
    {
        insertSomeStuff();
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
    public function insertSomeStuff(){
        $request ->session()->put(0,"First Item");
        $request ->session()->put(1,"Second Item");
        $request ->session()->put('length',2);
    }
}
