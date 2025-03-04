<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\contactcontroller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create/contact', function () {
   return view("contact.addcontact");
});

Route::post("/create/contact", [contactcontroller::class, 'create']);
Route::get("/contact", [contactcontroller::class, 'read']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
