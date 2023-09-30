<?php


use App\Enum\VehicleEnum;
use App\Http\Controllers\BuggyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FuriousController;
use App\Http\Controllers\MotocrossController;
use App\Http\Controllers\QuadController;
use App\Http\Controllers\ReservationController;
use App\Models\Pack;

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
    $packs = Pack::where('vehicle_id' , VehicleEnum::BUGGY)->get();
    return Inertia::render('Welcome', [
            'packs'=>$packs,
            ]);
})->name('welcome');

// BUGGY
Route::get('/buggy',[BuggyController::class,'index'])->name('buggy');
// QUAD
Route::get('/quad',[QuadController::class,'index'])->name('quad');
// MOTOCROSS
Route::get('/motocross',[MotocrossController::class,'index'])->name('motocross');
// FURIOUS
Route::get('/furious',[FuriousController::class,'index'])->name('furious');
// CONTACT
Route::get('/contact',[ContactController::class,'index'])->name('contact');
// RESERVATION
Route::get('/reservation/pack/{pack:slug}',[ReservationController::class,'create'])->name('reservation');
Route::post('/reservation/pack/{pack:slug}',[ReservationController::class,'store'])->name('reservation.store');
Route::get('/reservation/{reservation}',[ReservationController::class,'show'])->name('reservation.show');


Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('dashboard',function (){
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';
