<?php

use Illuminate\Support\Facades\Route;
use App\contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//public route
Route::get('/', 'PublicController@index')->name('publicHome');
Route::get('contact', 'PublicController@contact')->name('contact');
Route::get('about', 'PublicController@about')->name('about');
Route::get('viewbook', 'PublicController@viewBook')->name('viewbook');
Route::get('search', 'PublicController@search')->name('search');
Route::get('/shows/{id}', 'PublicController@showMoreToRead')->name('showMoreToRead');

//route for the contact(used as post message)
Route::post('message', 'PublicController@contactSubmit')->name('message');

// Route::get('approved_post', 'PublicController@adminApprovePost')->name('');
//For the search function/route 
// Route::any('/search', function () {
//     $searching = Input::get('search');
//      if($searching != ''){
//          $books = PostBook::where('title', 'LIKE', '%'.$searching.'%')
//                             ->orWhere('author', 'LIKE', '%'.$searching.'%')
//                             ->orWhere('isbn_no', 'LIKE', '%'.$searching.'%')
//                             ->paginate(5)
//                             ->setpath('');
//          $books->appends(array(
//              'search' => Input::get('search'),
//          ));
//          if(count($books) > 0){
//             return view('public.viewbook')->withData($books);
//          }
//          return view('public.viewbook')->withMessage("No result found!");
//      }
//      });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//public route
// Route::get('/userHome', function () {
//     return view('user.home');
// });update_password

Route::get('/userHome', 'HomeController@userDashboard')->name('userHome');

// user password
Route::get('/changepassword', 'HomeController@changepassword')->name('changepasswords');
Route::post('/update_password', 'HomeController@update_password')->name('update_password');

// about user details
Route::get('user_Details','HomeController@userDetails')->name('userDetails');
Route::get('userEdits/{id}','HomeController@userEdits')->name('userEdits');
Route::put('/update_user_details/{id}', 'HomeController@updateUser')->name('updateUser');




//admin route
Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/adminDashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/comment', function () {
        $dashs = contact::orderBy('id', 'desc')->paginate('20');
        return view('admin.comments')->with('dashs', $dashs);
    });

    Route::get('/show_comment/{id}', function ($id) {
        $dash = contact::findOrFail($id);
        return view('admin.showcomment')->with('dash', $dash);
    });

    Route::delete('/delete_comment/{id}', function ($id) {
        $dash = contact::findOrFail($id);
        $dash->delete();
        return redirect(url('adminDashboard'))->with('status', 'Comment deleted succssfully');
    });
        //Route for the user roles
        Route::get('userdetail', 'Admin\UserdetailsController@userdetail')->name('userdetails');
        Route::get('/userRole/{id}', 'Admin\UserdetailsController@editUserRole')->name('userRole');
        Route::delete('/RoleDestory/{id}','Admin\UserdetailsController@RoleDestory')->name('RoleDestory');

        // about admin details
        Route::get('Admin_Details','Admin\UserdetailsController@adminDetails')->name('adminDetails');
        Route::get('adminEdits/{id}','Admin\UserdetailsController@adminEdits')->name('adminEdits');
        Route::put('/update_details/{id}', 'Admin\UserdetailsController@updateUserRole')->name('updateRole');

        //change password
        Route::get('/profile/change-password', 'Admin\UserdetailsController@changePassword')->name('changepassword');
        Route::post('/profile/update-password', 'Admin\UserdetailsController@updatePassword')->name('updatepassword');
        

        //Route of borrowed book
        Route::get('/addBook/{id}', 'Admin\UserdetailsController@addBook')->name('addBook');
        Route::get('/user/{id}', 'Admin\UserdetailsController@user')->name('user');
        Route::post('borrow_book', 'Admin\BorrowBookController@borrowBook')->name('borrow_book');
        Route::get('returnBook', 'Admin\BorrowBookController@returnBook')->name('returnBook');
        Route::post('return', 'Admin\BorrowBookController@return')->name('return');
        Route::delete('/deleteReturn/{id}', 'Admin\BorrowBookController@deleteReturn')->name('deleteReturn');

        //Routing for the category
        Route::get('/category/{id}','Admin\UserdetailsController@category')->name('category');
        Route::get('addcategory','Admin\UserdetailsController@createCategory')->name('addcategory');// add new category
        Route::post('storecategory','Admin\UserdetailsController@addCategory')->name('storecategory');
        Route::get('editecategory','Admin\UserdetailsController@editCategory')->name('editcategory');
        Route::get('/editcategorybook/{id}','Admin\UserdetailsController@editCategoryPage')->name('editcategorybook');
        Route::post('/updatecategory/{id}','Admin\UserdetailsController@updateCategory')->name('updatecategory');

        //post book route
        Route::resource('postbook', 'Admin\PostBookController');

        //approve route of post review by the user
        Route::get('is_pendding', 'Admin\approveController@approvepost')->name('approve');
        Route::delete('/cancelled/{id}', 'Admin\approveController@cancelled')->name('cancelled');
        Route::get('/view_post/{id}', 'Admin\approveController@postView')->name('view_post');  
        Route::post('approval', 'Admin\approveController@approval')->name('approval');    
});

// Post Review Route and user postes route
// account holder Route
Route::resource('postReviews', 'User\PostReviewController');
Route::get('personal_posts', 'HomeController@ownPosts')->name('post_own_review');
Route::get('submit_status', 'Admin\BorrowBookController@submitStatus')->name('submit_status');

//route for the liks, dislike and comments
Route::get('index', 'User\liksDislikesCommentController@index')->name('index_show');
Route::get('/like/{id}', 'User\liksDislikesCommentController@likes')->name('likes');
Route::get('/dislike/{id}', 'User\liksDislikesCommentController@dislikes')->name('dislikes');
Route::post('/comments/{id}', 'User\liksDislikesCommentController@comments')->name('comments');
// Route::post('/commentstore/{id}', 'User\liksDislikesCommentController@commentstore')->name('commentstore');

