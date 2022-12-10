<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("signup","App\Http\Controllers\mycontroller@signup");
Route::post("formprocess","App\Http\Controllers\mycontroller@process");
Route::get("signin","App\Http\Controllers\mycontroller@signin");
Route::post("loginprocess","App\Http\Controllers\mycontroller@login");
Route::get("logoutsession","App\Http\Controllers\mycontroller@destroySession");
Route::get("home","App\Http\Controllers\mycontroller@home");
Route::get("changepassword","App\Http\Controllers\mycontroller@changepasswordform");
Route::post("change","App\Http\Controllers\mycontroller@changepassword");

Route::get("forgotpassword","App\Http\Controllers\mycontroller@forgotpasswordform");
Route::post("forgot","App\Http\Controllers\mycontroller@forgotpassword");
