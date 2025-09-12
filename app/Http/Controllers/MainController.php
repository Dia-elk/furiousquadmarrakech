<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    public function aboutUs()
    {
        return Inertia::render('AboutUs/Index');
    }

    public function gallery()
    {
        return Inertia::render('Gallery/Index');
    }

    public function reviews()
    {
        return Inertia::render('Reviews/Index');
    }

    public function faq()
    {
        return Inertia::render('FAQ/Index');
    }

    public function privacy()
    {
        return Inertia::render('Privacy/Index');
    }

    public function terms()
    {
        return Inertia::render('Terms/Index');
    }
}
