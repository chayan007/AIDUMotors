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
            $car->type = $request->type;
            $car->slug = Str::slug($request->model, '-');
            $car->description = $request->description;
            if ($request->has('featured')){
                $car->featured = $request->featured;
            }
            if ($request->hasFile('img')){
                $path = $request->file('img')->store('public');
                $car->img_path = $path;
            }
            if ($request->hasFile('brochure')){
                $path = $request->file('brochure')->store('public');
                $car->brochure_path = $path;
            }
            $car->save();
            return redirect()->action(
                'CarController@showCars'
            );
        }
        catch (Exception $e)
        {
            return view('admin.addCar', ['error' => 'Failed to add Car']);
        }
    }

    public function deleteCar($id){
        $car = Car::all()->where('id', $id)->first();
        $car->delete();
        return view();
    }

    public function featuredFunction($id){
        $car = Car::all()->where('id', $id)->first();
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

    public function searchController($model, $type){

    }

    public function showCarForm(){
        return view('admin.addCar');
    }

    public function showCars()
    {
        $cars = Car::all();
        return view('admin.Car', ['cars' => $cars]);
    }
}
