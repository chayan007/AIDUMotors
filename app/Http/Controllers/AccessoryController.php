<?php

namespace App\Http\Controllers;

use App\Accessory;
use Illuminate\Http\Request;
use Mockery\Exception;

class AccessoryController extends Controller
{
    public function addOrUpdateAccessory(Request $request, $id){
        $accessory = Accessory::where('id', $id)->first();
        if ($accessory == NULL){
            $accessory = new Accessory();
        }
        try{
            $accessory->name = $request->name;
            $accessory->description = $request->description;
            $accessory->price = $request->price;
            $accessory->save();
        }
        catch (Exception $e){
            return view();
        }
        return view();
    }

    public function deleteAccessory($id){
        $accessory = Accessory::where('id', $id)->firstOrFail();
        $accessory->delete();
        return view();
    }
}
