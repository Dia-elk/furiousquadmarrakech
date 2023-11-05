<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Mail\ReservationMail;
use App\Models\Pack;
use App\Models\Reservation;

use App\Notifications\ReservationMailNotification;
use App\Notifications\ReservationNotification;
use App\Notifications\SubscriberNotification;
use App\Services\Customer\CustomerService;
use App\Services\Reservation\ReservationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Inertia\Inertia;
use Mockery\Exception;

class ReservationController extends Controller
{
    public function create(Pack $pack)
    {
        return Inertia::render('Reservation/Create', [
            'pack' => $pack,
        ]);
    }

    public function store(Request $request, Pack $pack,  ReservationService $reservationService)
    {

          $reservation = $reservationService->create($request, $pack);

          // Sending Notification to the  owner and email to the client
          Mail::to($reservation->customer->email)->send(new ReservationMail($reservation));
          Notification::route('slack', config('services.slack.reservation'))->notify(new ReservationNotification($reservation));

          return to_route('reservation.show', $reservation);
    }

    public function show(Reservation $reservation)
    {
        $r = Reservation::with('pack', 'customer')->where('id', $reservation->id)->first();
        $pack = Pack::with('vehicle')->where('id', $r->pack->id)->first();
        return Inertia::render('Reservation/Show', [
            'reservation' => $r,
            'pack' => $pack,
            'customer' => $r->customer,
        ]);
    }

}
