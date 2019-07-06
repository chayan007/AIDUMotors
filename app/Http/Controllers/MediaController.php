<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;

class MediaController extends Controller
{
    public function addOrUpdateMedia(Request $request, $id){
        $media = Media::where('id', $id)->first();

        if ($media == NULL){
            $media = new Media();
            if ($request->hasFile('img')){
                $path = $request->file('img')->store('public');
                $media->img_path = $path;
            }
        }
        $media->description = $request->description;
        $media->save();
    }

    public function deleteMedia($id){
        $media = Media::where('id', $id)->first();
        $media->delete();
    }
}
