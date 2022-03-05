<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function storeName(Request $request)
    {
        //die and dump
        dd($request);

    }
    public function storeNameForm()
    {
        return view("store_name");

    }
}
