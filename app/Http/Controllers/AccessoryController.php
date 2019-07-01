<?php

namespace App\Http\Controllers;

use App\Accessory;
use Illuminate\Http\Request;
use Mockery\Exception;

class AccessoryController extends Controller
{
    public function addOrUpdateAccessory(Request $request, $id){
        $accessory = Accessory::all()->where('id', $id)->first();
        if ($accessory == NULL){
            $accessory = new Accessory();
        }
        try{
            $accessory->name = $request->name;
            $accessory->description = $request->description;
            $accessory->price = $request->price;
            if ($request->hasFile('img')){
                $path = $request->file('img')->store('public');
                $accessory->img_path = $path;
            }
            $accessory->save();
            return view();
        }
        catch (Exception $e){
            return view();
        }
    }

    public function deleteAccessory($id){
        $accessory = Accessory::all()->where('id', $id)->first();
        $accessory->delete();
        return view();
    }
}
