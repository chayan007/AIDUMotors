<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function showCars()
    {
        $cars = Car::paginate(10);
        return view('Cars', ['cars' => $cars]);
    }

    public function services()
    {
        return view('Services');
    }

    public function team()
    {
        return view('Team');
    }
}
