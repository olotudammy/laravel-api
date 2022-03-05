<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about($firstName = "Tosin") {

        $lastName = "Olotu";

        return $firstName . " ". $lastName;
    }
}
