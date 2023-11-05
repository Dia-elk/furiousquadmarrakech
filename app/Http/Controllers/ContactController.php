<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Notifications\ContactNotification;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Notification;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        return Inertia::render('Contact/Index');
    }
    public function store(StoreContactRequest $request)
    {

       Notification::route('slack',config('services.slack.contact'))->notify(new ContactNotification($request->email,$request->name,$request->message));
       return back();
    }
}
