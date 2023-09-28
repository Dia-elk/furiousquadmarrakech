<?php

namespace App\Http\Controllers;

use App\Enum\VehicleEnum;
use App\Models\Pack;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Inertia\Inertia;

class QuadController extends Controller
{
    public function index()
    {
        $packs = Pack::with('vehicle')->where('vehicle_id', VehicleEnum::QUAD)->get();
        return Inertia::render('Quad/Index', [
            'packs' => $packs,
        ]);
    }
}
