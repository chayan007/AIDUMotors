<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Mockery\Exception;
use Illuminate\Support\Str;

class CarController extends Controller
{
    public function addOrUpdateCar(Request $request, $id){
        $car = Car::where('id', $id)->first();
        if ($car == NULL)
        {
            $car = new Car();
        }
        try{
            $car->model = $request->model;
            $car->transmission = $request->transmission;
            $car->emi = $request->emi;
            $car->mileage = $request->mileage;
            $car->price = $request->price;
            $car->slug = Str::slug($request->model + $request->transmission, '-');
            $car->description = $request->description;
            $car->featured = $request->featured;
            if ($request->hasFile('img')){
                $path = $request->file('img')->store('public');
                $car->img_path = $path;
            }
            $car->save();
            return view();
        }
        catch (Exception $e)
        {
            return view();
        }
    }

    public function deleteCar($id){
        $car = Car::where('id', $id)->firstOrFail();
        $car->delete();
        return view();
    }

    public function featuredFunction($id){
        $car = Car::where('id', $id)->firstOrFail();
        if ($car->featured == 1)
        {
            $car->featured = 0;
        }
        else{
            $car->featured = 1;
        }
        $car->save();
        return view();
    }
}
