<?php

namespace App\Http\Controllers;

use App\Accessory;
use App\Car;
use App\Images;
use App\Media;
use App\Review;
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

    public function showAccessories()
    {
        $accessories = Accessory::paginate(15);
        return view('Accessories', ['accessories' => $accessories]);
    }

    public function showTheCar($slug)
    {
        $car = Car::where('slug', $slug)->firstOrFail();
        return view('OneCar', ['car' => $car]);
    }

    public function home()
    {
        $featured_cars = Car::where('featured', 1)->take(6)->get();
        return view('welcome', ['cars' => $featured_cars]);
    }

    public function reviews()
    {
        $reviews = Review::paginate(10);
        return view('Reviews', ['reviews' => $reviews]);
    }

}
