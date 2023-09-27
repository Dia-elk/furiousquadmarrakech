<?php

namespace App\Http\Controllers;

use App\Enum\VehicleEnum;
use App\Models\Pack;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MotocrossController extends Controller
{

    public function index()
    {
        $packs = Pack::where('vehicle_id', VehicleEnum::MOTOCROSS)->get();
        return Inertia::render('Motocross/Index', [
            'packs' => $packs,
            'vehicle' => Vehicle::where('id',VehicleEnum::MOTOCROSS)->get(),
        ]);
    }
}
