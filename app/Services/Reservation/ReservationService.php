<?php

namespace App\Services\Reservation;

use App\Models\Customer;
use App\Models\Pack;
use App\Models\Reservation;
use App\Services\Customer\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationService
{
    public function create(Request $request, Pack $pack)
    {
        $customerService = new CustomerService();
        DB::beginTransaction();
        $customer = $customerService->findOrCreate($request->email, $request->phone);
        $reservation = Reservation::where('pack_id', $pack->id)->where('customer_id', $customer->id)->where('is_confirmed', false)->where('drivers', $request->drivers)->where('passengers', $request->passengers)->where('children', $request->children)->first() ??
            Reservation::create([
                'pack_id' => $pack->id,
                'customer_id' => $customer->id,
                'name' => $request->name,
                'country' => $request->country,
                'reservation_date' => $request->date,
                'reservation_time' => $request->time,
                'drivers' => $request->driver,
                'passengers' => $request->passenger,
                'children' => $request->child,
                'total_price' => $request->price,
            ]);
        DB::commit();
        return $reservation;
    }
}
