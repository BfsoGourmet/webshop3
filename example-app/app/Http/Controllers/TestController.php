<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function show_test() {
        $users = ["Hans", "Ursi", "Olga"];
        return view('test',)->with('users', $users);
    }
}
