<?php

namespace App\Services\Reservation;

use App\Enum\SourceEnum;
use App\Http\Requests\StoreReservationRequest;
use App\Models\Customer;
use App\Models\Pack;
use App\Models\Reservation;
use App\Services\Customer\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationService
{
    public function create(StoreReservationRequest $request, Pack $pack, SourceEnum $sourceEnum)
    {
        $customerService = new CustomerService();
        DB::beginTransaction();
        $customer = $customerService->findOrCreate($request->email, $request->phone);
        $totalPrice = $this->calculatePrice($request, $pack);


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
                'total_price' => $totalPrice,
                'source' => $sourceEnum,
            ]);
        DB::commit();
        return $reservation;
    }

    private function calculatePrice(StoreReservationRequest $request, Pack $pack): float
    {
        return ($pack->price * (int)$request->driver) + ((int)$request->passenger * $pack->passenger_price) + ((int)$request->child * $pack->child_price);
    }
}
