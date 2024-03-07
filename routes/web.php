<?php


use App\Enum\VehicleEnum;
use App\Http\Controllers\BuggyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FuriousController;
use App\Http\Controllers\MotocrossController;
use App\Http\Controllers\ParaglidingController;
use App\Http\Controllers\QuadController;
use App\Http\Controllers\ReservationController;
use App\Mail\ReservationMail;
use App\Models\Pack;

use Illuminate\Support\Facades\Mail;
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

    $buggyPack = Pack::with('vehicle')->where('vehicle_id', VehicleEnum::BUGGY)->first();
    $quadPack = Pack::with('vehicle')->where('vehicle_id', VehicleEnum::QUAD)->first();
    $motocrossPack = Pack::with('vehicle')->where('vehicle_id', VehicleEnum::MOTOCROSS)->first();
    $packs = [
        $quadPack,
        $buggyPack,
        $motocrossPack,
    ];
    return Inertia::render('Welcome', [
        'packs' => $packs,
    ]);
})->name('welcome');

Route::get('/email', function () {
    return view('mails/reservation');
});

// BUGGY
Route::get('/buggy-marrakech', [BuggyController::class, 'index'])->name('buggy');

// QUAD
Route::get('/quad-marrakech', [QuadController::class, 'index'])->name('quad');

// MOTOCROSS
Route::get('/motocross-marrakech', [MotocrossController::class, 'index'])->name('motocross');

// PARAPENTE
Route::get('/paragliding-marrakech', [ParaglidingController::class, 'index'])->name('paragliding');

// FURIOUS
Route::get('/furious', [FuriousController::class, 'index'])->name('furious');

// CONTACT
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

//Vehicle choice
Route::get('/vehicle-choice', function () {
    return Inertia::render('Vehicle-choice/Index');
})->name('vehicle-choice');

// RESERVATION
Route::get('/reservation/pack/{pack:slug}', [ReservationController::class, 'create'])->name('reservation');
Route::post('/reservation/pack/{pack:slug}', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/reservation/{reservation}', [ReservationController::class, 'show'])->name('reservation.show');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';
