<?php

namespace App\Http\Controllers;

use App\Images;
use App\Videos;
use Illuminate\Http\Request;
use App\Media;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function addMedia(Request $request, $id){
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
        return back();
    }

    public function deleteMedia($id){
        $media = Media::where('id', $id)->first();
        $media->delete();
    }

    public function addImage(Request $request, $id){
        $image = new Images();
        if ($request->hasFile('image')){
            $path = $request->file('image')->store('public');
            $image->image_path = $path;
        }
        $image->save();
        return back();

    }

    public function deleteImage($id){
        $image = Images::where('id', $id)->first();
        $image->delete();
        return back();
    }

    public function addVideo(Request $request, $id){
        $video = new Videos();
        if ($request->hasFile('video')){
            $path = $request->file('video')->store('public');
            $video->video_path = $path;
        }
        $video->save();
        return back();
    }

    public function deleteVideo($id){
        $video = Videos::where('id', $id)->first();
        $video->delete();
        return back();
    }

    public function showImageForm()
    {
        return view('admin.addGallery');
    }

    public function showMediaForm(){
        return \view('admin.addMedia');
    }

    public function showImages()
    {
        $images = Images::all();
        return \view('admin.Gallery', ['images' => $images]);
    }

    public function showMedia()
    {
        $medias = Media::all();
        return \view('admin.Media', ['medias' => $medias]);
    }
}
