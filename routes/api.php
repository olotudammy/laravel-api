<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/larasoft", function () {
    $olotu = [
        "name" => "Dammy",
        "profession" => "Software Engineer"
    ];
    return response()->json($olotu);
});
