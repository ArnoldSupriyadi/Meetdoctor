<?php

use Illuminate\Support\Facades\Route;

//Frontsite
use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\PaymentController;

//Backsite
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\TypeUserController;
use App\Http\Controllers\Backsite\SpecialistController;
/*
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
Route::resource('/', LandingController::class);

Route::group(['middleware' => ['auth:sanctum','verified']], function(){
     //appointment page
     Route::resource('appointment', AppointmentController::class);

     //payment page
     Route::resource('payment', PaymentController::class);
});


Route::group(['prefix' => 'backsite','as' => 'backsite.', 'middleware' => ['auth:sanctum',
'verified']], function(){

    //dashboard
    Route::resource('dashboard', DashboardController::class);

     //typeuser
    Route::resource('type_user', TypeUserController::class);

     //specialist
    Route::resource('specialist', SpecialistController::class);
    
});

