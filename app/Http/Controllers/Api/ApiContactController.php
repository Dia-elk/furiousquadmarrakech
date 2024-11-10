<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Notifications\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ApiContactController extends Controller
{
    public function store(StoreContactRequest $request)
    {
        Notification::route('slack', config('services.slack.contact'))->notify(new ContactNotification($request->email, $request->name, $request->message));
        return response()->json(['messages' => 'Thank you for contacting us']);
    }
}
