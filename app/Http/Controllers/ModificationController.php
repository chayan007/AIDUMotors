<?php

namespace App\Http\Controllers;

use App\Modification;
use Illuminate\Http\Request;
use Mockery\Exception;

class ModificationController extends Controller
{
    public function addOrUpdateModification(Request $request, $id){
        $modification = Modification::all()->where('id', $id)->first();
        if ($modification == NULL){
            $modification = new Modification();
        }
        try{
            $modification->name = $request->name;
            $modification->price = $request->price;
            $modification->description = $request->description;
            $modification->save();
            return view();
        }catch (Exception $e){
            return view();
        }
    }

    public function deleteModification($id){
        $modification = Modification::all()->where('id', $id)->first();
        $modification->delete();
        return view();
    }
}
