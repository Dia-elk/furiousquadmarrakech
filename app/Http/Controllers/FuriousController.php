<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FuriousController extends Controller
{
    public function index()
    {
        return Inertia::render('Furious/Index');
    }
}
