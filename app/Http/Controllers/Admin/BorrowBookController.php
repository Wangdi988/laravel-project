<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BorrowBook;

class BorrowBookController extends Controller
{
    public function borrowBook(Request $request){
        $borrow = new BorrowBook;
        $borrow->user_id = $request->input('user_id');
        $borrow->name = $request->input('name');
        $borrow->email_id = $request->input('email_id');
        $borrow->book_title = $request->input('book_title');
        $borrow->author = $request->input('author');
        $borrow->isbn_no = $request->input('isbn_no');
        $borrow->borrow_date = $request->input('borrow_date');
        $borrow->due_date = $request->input('due_date');
        $borrow->save();
        return redirect(route('userdetails'));
    }

    public function returnBook(){
        $returns = BorrowBook::orderBy('id', 'desc')->paginate(15);
        return view('admin.book.return_book')->with('returns', $returns);
    }

    public function return(Request $request){
        $return_book = BorrowBook::find($request->postId);
        $return_bookVal = $request->return_book;
        if($return_bookVal == "on"){
            $return_bookVal = 1;
        }else {
            $return_bookVal = 0;
        }
        $return_book->return_book=$return_bookVal;
        $return_book->save();
        return redirect(route('returnBook'));
    }

    public function deleteReturn($id){
        $return_book = BorrowBook::findOrFail($id);
        $return_book -> delete();
        return redirect(route('userdetails'))->with('status','Your data is successfully Deleted');
    }
    
    public function submitStatus()
    {
        $submits = BorrowBook::all();
        return view('user.submitBook')->with('submits',$submits);
    }
    // $user_id = auth()->user()->id;
    //     $user = User::find($user_id);
    //     // return view('user.editDelete')->with('posts',$user->posts);
    //     return view('user.ownposts')->with('postReviews',$user->postReviews);
}
