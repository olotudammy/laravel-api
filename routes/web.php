<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, "index"])->name("home_page");

Route::get("/contact", [ContactController::class, "contact"]);

//single path parameter
Route::get("/document/{name}", [DocumentController::class , "document"]);

//optional path parameter
Route::get("/about-me/{first_name?}", [AboutController::class, "about"]);

//double path parameter
Route::get("/document/{name}/{age}", [DocumentController::class, "doc"]);

//Post
Route::get("/store-name-form", [HomeController::class, "storeNameForm"])->name("store_name_form");
Route::post("/process-store-name", [HomeController::class, "storeName"])->name("store_name");

//put and //patch (update)
Route::put("/update", [HomeController::class, "UpdateName"])->name("update_name");
Route::patch("/update-name", [HomeController::class, "UpdateName"])->name("update_name2");


//delete
Route::delete("/delete-name/{id}", [HomeController::class, "DeleteName"])->name("update_name2");





