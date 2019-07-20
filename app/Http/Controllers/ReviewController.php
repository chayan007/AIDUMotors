<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function addOrUpdateReview(Request $request, $id)
    {
        $review = new Review();

        if ($request->has('comment')){
            $review->comment = $request->comment;
        }

        if ($request->hasFile('image')){
            $path = $request->file('image')->store('public');
            $review->image_path = $path;
        }

        if ($request->hasFile('video')){
            $path = $request->file('video')->store('public');
            $review->video_path = $path;
        }

        $review->save();
        return back();
    }

    public function deleteReview($id){
        $review = Review::where('id', $id)->first();
        $review->delete();
        return back();
    }

    public function showReviewForm()
    {
        return view('admin.addReview');
    }

    public function showReviews()
    {
        return view('admin.Review');
    }
}
