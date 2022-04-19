<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\PostReview;

class approveController extends Controller
{
    public function approvePost() {
        $reviews = PostReview::orderBy('id', 'desc')->paginate(30);
        return view('admin.approve.approvepost')->with('reviews', $reviews);
    }

    public function postView($id) {
        $review = PostReview::findOrFail($id);
        return view('admin.approve.approveShow')->with('review', $review); 
    }

    public function cancelled($id) {
        $review = PostReview::find($id);

        if($review->cover_image != 'noimage.jpg'){
            // Delete Image 
           Storage::delete('public/cover_images/'.$review->cover_image);
           //Storage::disk('s3')->delete('public/cover_image/'.$post->cover_image);
        }
        
        $review->delete();
        // $users = PostReview::findOrFail($id);
        // $users -> delete();
        return redirect(route('approve'))->with('status', 'cancelled the post succssfully'); 
    }

    public function approval(Request $request){
        $approve = PostReview::find($request->postId);
        $approveVal = $request->approve;
        if($approveVal == "on"){
            $approveVal = 1;
        }else {
            $approveVal = 0;
        }
        $approve->approve=$approveVal;
        $approve->save();
        return redirect(route('approve'))->with('status', 'cancelled the post succssfully');
    }
}
