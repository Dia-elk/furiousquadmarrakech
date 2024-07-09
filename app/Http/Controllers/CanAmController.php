<?php

namespace App\Http\Controllers;

use App\Enum\VehicleEnum;
use App\Models\Pack;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CanAmController extends Controller
{
    public function index()
    {
        $packs = Pack::with('vehicle')->where('vehicle_id', VehicleEnum::CAN_AM)->get();
        return Inertia::render('CanAm/Index', [
            'packs' => $packs,
        ]);
    }
}
