<?php

namespace App\Http\Controllers;

use App\Enum\VehicleEnum;
use App\Models\Pack;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BuggyController extends Controller
{
    public function index()
    {

        $packs = Pack::with('vehicle')->where('vehicle_id', VehicleEnum::BUGGY)->get();
        return Inertia::render('Buggy/Index', [
            'packs' => $packs,
        ]);
    }
}
