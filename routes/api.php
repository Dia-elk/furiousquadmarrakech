<?php

use App\Http\Controllers\Api\ApiContactController;
use App\Http\Controllers\Api\ApiPackController;
use App\Http\Controllers\Api\ApiReservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

],function (){
    Route::get('furious/{pack:slug}',[ApiReservationController::class,'getPack']);
    Route::get('furious/reservation/{reservation}',[ApiReservationController::class,'getReservation']);
    Route::post('furious/{pack:slug}/book',[ApiReservationController::class,'store']);
    Route::post('furious/contact',[ApiContactController::class,'store']);
    Route::get('furious/packs/quad',[ApiPackController::class,'quad']);
    Route::get('furious/packs/buggy',[ApiPackController::class,'buggy']);
    Route::get('furious/packs/motocross',[ApiPackController::class,'motocross']);
    Route::get('furious/packs/can-am',[ApiPackController::class,'canAm']);
});
