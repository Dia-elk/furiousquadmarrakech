<?php

namespace App\Http\Controllers\Api;

use App\Enum\SourceEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Mail\ReservationMail;
use App\Models\Pack;
use App\Notifications\ReservationNotification;
use App\Services\Reservation\ReservationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class ApiReservationController extends Controller
{
    public function getPack(Pack $pack)
    {
        return response()->json([
            'pack' => $pack,
        ]);
    }

    public function store(StoreReservationRequest $request, Pack $pack, ReservationService $reservationService)
    {
        //dd($request->all());
        $reservation = $reservationService->create($request, $pack, SourceEnum::FURIOUS_FR);

        // Sending Notification to the  owner and email to the client
        Mail::to($reservation->customer->email)->send(new ReservationMail($reservation));
        Notification::route('slack', config('services.slack.reservation'))->notify(new ReservationNotification($reservation));

        return response()->json([
            'reservation' => $reservation
        ]);
    }


}
