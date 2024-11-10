<?php

namespace App\Http\Controllers\Api;

use App\Enum\VehicleEnum;
use App\Http\Controllers\Controller;
use App\Models\Pack;
use Illuminate\Http\Request;

class ApiPackController extends Controller
{
    public function quad()
    {
        $packs = Pack::with('vehicle')->where('vehicle_id', VehicleEnum::QUAD)->get();
        return response()->json([
            'packs' => $packs
        ]);

    }

    public function buggy()
    {
        $packs = Pack::with('vehicle')->where('vehicle_id', VehicleEnum::BUGGY)->get();
        return response()->json([
            'packs' => $packs
        ]);
    }

    public function motocross()
    {
        $packs = Pack::with('vehicle')->where('vehicle_id', VehicleEnum::MOTOCROSS)->get();
        return response()->json([
            'packs' => $packs
        ]);
    }

    public function canAm()
    {
        $packs = Pack::with('vehicle')->where('vehicle_id', VehicleEnum::CAN_AM)->get();
        return response()->json([
            'packs' => $packs
        ]);
    }
}
