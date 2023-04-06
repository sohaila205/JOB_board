<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\JobController;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\JobApplicationController;

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

 Route::post('CreateCompany',[CompanyController::class,'store']);
 Route::get('showApi', [CompanyController::class,'show'])->name('showApi');

 Route::post('CreateJob',[JobController::class,'store']);
 Route::get('showJob', [JobController::class,'show'])->name('showJob');


 Route::post('CreateApp',[JobApplicationController::class,'store']);
 Route::get('showApp', [JobApplicationController::class,'show'])->name('showApp');

   Route::get('logoutApi', [LoginController::class,'logout']);
});
