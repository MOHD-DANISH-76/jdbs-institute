<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }

    public function mentor(): View
    {
        return view('mentor-message');
    }

    public function contact(): View
    {
        return view('contact');
    }
}