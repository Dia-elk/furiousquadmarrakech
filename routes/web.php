<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('UnderConstruction' ,[
        'isSubscribed' => false,
    ]);
})->name('underConstruction');

Route::get('/subscribed', function () {
    return Inertia::render('UnderConstruction' ,[
        'isSubscribed' => true,
    ]);
})->name('underConstruction.subscribed');

Route::resource('subscriber',\App\Http\Controllers\SubscriberController::class)->only('store');
