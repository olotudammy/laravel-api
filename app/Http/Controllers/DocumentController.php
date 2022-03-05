<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{

    public function document(Request $request, $name) {
        $school = $request->query("school");
        $level = $request->query("level");
        $age = $request->query("age");

        dd($school, $level, $age);
    }





    public function doc ($name, $dammy) {
        return $name . " ". $dammy;
    }
}
