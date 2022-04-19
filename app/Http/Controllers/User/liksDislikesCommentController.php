<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\like;
use App\Dislike;
use App\Comment;
use App\PostReview;

class liksDislikesCommentController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(['auth','verified']);
    }

    public function index($id){
        $reviews = PostReview:: where('approve', '1')->orderBy('id', 'desc')->paginate(10);
        return view('user.index')->with('reviews', $reviews);
    }
    public function likes($id) {
        // $likePost = PostReview::find($id);//findout for particular id
        // $likeCount = like::where(['id' => $likePost])->get();
        // return $id;
        $loggedin_user = Auth::user()->id;
        $like_user = like::where(['user_id' => $loggedin_user, 'post_id'=>$id])->first();
        if(empty($like_user->user_id)){
           $user_id = Auth::user()->id;
           $name = Auth::user()->name;
           $post_id = $id; 

           $like = new like;
           $like->user_id = $user_id;
           $like->post_id = $post_id;
           $like->name = $name;
           $like->save();
           return redirect(route('postReviews.index'));
        }
        else {
            return redirect(route('postReviews.index'));
        }
    }

    public function dislikes($id) {
        // $likePost = PostReview::find($id);//findout for particular id
        // $likeCount = like::where(['id' => $likePost])->get();
        // return $id;
        $loggedin_user = Auth::user()->id;
        $dislike_user = Dislike::where(['user_id' => $loggedin_user, 'post_id'=>$id])->first();
        if(empty($dislike_user->user_id)){
           $user_id = Auth::user()->id;
           $name = Auth::user()->name;
           $post_id = $id; 
           
           $dislike = new Dislike;
           $dislike->user_id = $user_id;
           $dislike->post_id = $post_id;
           $dislike->name = $name;
           $dislike->save();
           return redirect(route('postReviews.index'));
        }
        else {
            return redirect(route('postReviews.index'));
        }
    }

    // public function comments($id){
    //     $comments = Comment::find($id);
    //     return view('user.comments')->with('comments', $comments);
    //     // return view('user.comments');
    // }

    public function comments(Request $request, $id){
        $this->validate($request,[
            'comment'=> 'required',
        ]);
        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $id;
        $comment->name = Auth::user()->name;
        $comment->comment = $request->input('comment');
        $comment->save();
        // return redirect('postReviews.show .{$id}')->with('status', 'Comment is create successfuly');
        return redirect()->back()->with('status', 'Comment is create successfuly');
    }

}