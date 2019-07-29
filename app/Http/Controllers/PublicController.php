<?php

namespace App\Http\Controllers;

use App\Car;
use App\Images;
use App\Media;
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

    public function contact()
    {
        return view('Contact');
    }

    public function showMedias()
    {
        $medias = Media::paginate(10);
        return view('Media', ['medias' => $medias]);
    }

    public function showGallery()
    {
        $galleries = Images::paginate(15);
        return view('Gallery', ['galleries' => $galleries]);
    }

}
