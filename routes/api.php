<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('loginApi',[LoginController::class,'login'])->middleware('guest');
Route::post('registerApi',[RegisterController::class,'register']);
Route::group(['middleware' => ['auth:api']], function() {
   Route::get('logoutApi', [LoginController::class,'logout']);
});
