<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Pack;
use App\Models\Reservation;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ReservationController extends Controller
{
    public function index(Pack $pack)
    {
        return Inertia::render('Reservation/Index', [
            'pack' => $pack,
        ]);
    }

    public function store(Request $request, Pack $pack)
    {



        if (count(Customer::where('email', $request->email)->get()) || count(Customer::where('phone_number', $request->phone)->get())) {
            $customer = Customer::where('email', $request->email)->first() ?? Customer::where('phone_number', $request->phone)->first();

            $customerEmail = Customer::where('email', $request->email)->first() ?? $customer->update(['email'=>$request->email]);
            $customerPhone = Customer::where('phone_number', $request->phone)->first() ?? $customer->update(['phone_number'=>$request->phone]);
        } else {
            $customer = Customer::create([
                'email' => $request->email,
                'phone_number' => $request->phone,]);
        }


        $reservation =
            Reservation::where('pack_id', $pack->id)->where('customer_id', $customer->id)->where('is_confirmed', false)->first() ??
            Reservation::create([
                'pack_id' => $pack->id,
                'customer_id' => $customer->id,
                'total_price' => $pack->price,
            ]);


        return to_route('reservation.show', $reservation);
    }

    public function show(Reservation $reservation)
    {
        return Inertia::render('Reservation/Show', [
            'reservation' => $reservation,
            'pack' => $reservation->pack()->with('vehicle')->first(),
            'customer' => $reservation->customer()->first(),
        ]);
    }

}
