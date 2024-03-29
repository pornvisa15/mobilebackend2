<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Models\Product;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Prompts\Prompt;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   // return $request->user();
//});
 //Route::resource('products',ProductController::class);
 
 Route::post("register",[AuthController::class,"register"]);
 Route::post("login",[AuthController::class,"login"]);

 Route::group(["middieware" => "auth:sanctum"],function(){
    Route::post("logout",[AuthController::class,"logout"]);
    Route::resource('products',ProductController::class);
 });
