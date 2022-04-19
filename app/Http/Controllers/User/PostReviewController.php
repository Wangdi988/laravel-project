<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PostReview;
use App\like;
use App\Dislike;
use App\Comment;

class PostReviewController extends Controller
{

        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()//used middleware for restrick the user to access without login  
    {
        // $this->middleware('auth',['except'=>['except', 'show']]);
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $likePost = PostReview::find($id);//findout for particular id
        // $likeCount = like::where(['post_id' => $likePost->id])->count();
        // $reviews = PostReview:: where('approve', '1')->with('like')->orderBy('id', 'desc')->paginate(10);
        // $post = Post::find($request->id);
        // $response = auth()->user()->toggleLike($post);

        // $likePost = PostReview::find($request->id);//findout for particular id
        // $likeCount = like::where(['post_id' => $likePost->id])->count();
        $reviews = PostReview:: where('approve', '1')->orderBy('id', 'desc')->paginate(10);
        return view('user.index', ['reviews'=> $reviews]);
        // return view('user.index')->with('reviews', $reviews);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'isbn_no' => 'required',
            'summaryOfBook' => 'required',
            'cover_image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        
         // Handle file upload/ image of the post
         if($request->hasFile('cover_image')){
            // Get fileName with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just file extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameTostore = $filename.'_'.time().'.'.$extension;

            //Uplaode image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameTostore);//
        }else {
            $fileNameToStore = 'noimage';
        }

        //Create post;
        $review = new PostReview;
        $review->title = $request->input('title');
        $review->author = $request->input('author');
        $review->isbn_no = $request->input('isbn_no');
        $review->summaryOfBook = $request->input('summaryOfBook');
        $review->user_id = auth()->user()->id;
        $review->cover_image = $fileNameTostore;
        $review->save();
        return redirect(route('postReviews.index'))->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //return PostReview::find($id); //test to fatch the data from the database
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
        // return $comments;
        // exit();
        $review = PostReview::find($id);
        return view('user.show',['review'=>$review, 'likeCount'=>$likeCount, 'dislikeCount'=>$dislikeCount, 'comments'=>$comments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = PostReview::find($id);
        //check for correct usr
        // if(auth()->user()->id !== $post->user_id){
        //     return redirect('user.index');
        // }

        //check for correct user 
        if(auth()->user()->id !== $review->user_id){
            return redirect(route('postReviews.index'))->with('error','You are unauthorised to edit this post');
        }

        return view('user.edit')->with('review',$review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'isbn_no' => 'required',
            'summaryOfBook' => 'required',
            'cover_image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        
         // Handle file upload/ image of the post
         if($request->hasFile('cover_image')){
            // Get fileName with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just file extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameTostore = $filename.'_'.time().'.'.$extension;

            //Uplaode image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameTostore);//
        }

        //Create post;
        $review = PostReview::find($id);
        $review->title = $request->input('title');
        $review->author = $request->input('author');
        $review->isbn_no = $request->input('isbn_no');
        $review->summaryOfBook = $request->input('summaryOfBook');
        // $review->user_id = auth()->user()->id;
        if($request->hasFile('cover_image')){
            $review->cover_image = $fileNameTostore;
        }
        $review->update();
        return redirect(route('postReviews.index'))->with('success', 'Post update');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = PostReview::find($id);

        if(auth()->user()->id !== $review->user_id){
            return redirect(route('postReviews.index'))->with('error','You are unauthorised to delete this post');
        }

        if($review->cover_image != 'noimage.jpg'){
            // Delete Image 
           Storage::delete('public/cover_images/'.$review->cover_image);
           //Storage::disk('s3')->delete('public/cover_image/'.$post->cover_image);
        }
        
        $review->delete();
        return redirect(route('postReviews.index'))->with('success', 'Post deleted succssfully');
    }
}
