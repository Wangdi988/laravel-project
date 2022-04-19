<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PostBook;
use App\Category;
use App\PostReview;
use App\contact;
use App\Dislike;
use App\like;



class PublicController extends Controller
{
    public function index(){
        // $reviews = PostReview:: where('approve', '1')->orderBy('id', 'desc')->paginate(10);
        // $reviews = PostReview:: where('approve', '1')->get()->random(2);
        $reviews = DB::table('users')
        ->join('post_reviews', 'users.id', '=', 'post_reviews.user_id')
        ->select('users.*', 'post_reviews.*')
        ->where('post_reviews.approve','=', '1')
        ->get()
        ->random(2);
        return view('public.home')->with('reviews', $reviews);
        // return view('public.home');
    }

    public function contact(){
        return view('public.contact');
    }

    public function about(){
        return view('public.about');
    }

    public function viewBook(){
        $books = PostBook::orderBy('id', 'desc')->paginate(10);
        return view('public.viewbook', ['books'=>$books]);
    }

    public function search(Request $request){
        $searching = $_GET['search'];
        $books = PostBook::where('title', 'LIKE', '%'.$searching.'%')
                                 ->orWhere('author', 'LIKE', '%'.$searching.'%')
                                 ->orWhere('isbn_no', 'LIKE', '%'.$searching.'%')
                                 ->paginate(5);
                                 return view('public.viewbook')->with('books', $books);
    }

    public function contactSubmit(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|min:3',
            'message'=>'required|min:6',
        ]);
        $contact = new contact;  
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect(route('contact'))->with('status', 'You have post successfully');
    }


    // public function adminApprovePost()
    // {
    //     $reviews = PostReview:: where('approve', '1')->orderBy('id', 'desc')->paginate(10);
    //     return view('user.index')->with('reviews', $reviews);
    // }

    public function showMoreToRead($id) {
        $likePost = PostReview::find($id);//findout for particular id
        $likeCount = like::where(['post_id' => $likePost->id])->count();
        $dislikeCount = Dislike::where(['post_id' => $likePost->id])->count();
        // return $likeCount; 
        // exit();
        $comments = DB::table('users')
        ->join('comments', 'users.id', '=', 'comments.user_id')
        ->join('post_reviews', 'comments.post_id', '=', 'post_reviews.id')
        ->select('users.name', 'comments.*')
        ->where(['post_reviews.id'=> $id])
        ->get();
        $shows = PostReview::findOrFail($id);
        return view('public.showMore',['shows'=>$shows, 'likeCount'=>$likeCount, 'dislikeCount'=>$dislikeCount, 'comments'=>$comments]);
    }

}