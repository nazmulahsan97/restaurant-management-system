<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route:: get("/",[Homecontroller::class,"index"]);

Route:: get("/users",[Admincontroller::class,"user"]);

Route:: get("/deletemenu/{id}",[Admincontroller::class,"deletemenu"]);

Route:: get("/foodmenu",[Admincontroller::class,"foodmenu"]);

Route:: post("/uploadfood",[Admincontroller::class,"upload"]);

Route:: get("/deleteuser/{id}",[Admincontroller::class,"deleteuser"]);

Route:: post("/reservation",[Admincontroller::class,"reservation"]);

Route:: get("/viewreservation",[Admincontroller::class,"viewreservation"]);

Route:: post("/addcart/{id}",[Homecontroller::class,"addcart"]);

Route:: get("/showcart/{id}",[Homecontroller::class,"showcart"]);


Route:: get("/redirects",[Homecontroller::class,"redirects"]);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
