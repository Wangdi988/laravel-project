<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\EmailRule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\PostBook;
use App\Category;
use Auth;
use Hash;

class UserdetailsController extends Controller
{
    public function userdetail(){
        $posts = User::orderBy('id', 'desc')->paginate(20);
        {
            return view('admin.userdetails')->with('posts', $posts);
        }
    }

    public function editUserRole($id){
        $users = User::find($id);
        return view('admin.userRole')->with('users',$users);  
    }

    public function RoleDestory($id){
        $users = User::findOrFail($id);
        $users -> delete();
        return redirect(route('userdetails'))->with('status','Your data is successfully Deleted');
    }

    //Following are the controller for the category

    public function category(Request $request,$cat_id){
      $categories = Category::all();
      $posts = DB::table('post_books')
            ->join('categories', 'post_books.category_id', '=', 'categories.id')
            ->select('post_books.*', 'categories.*')
            ->where(['categories.id'=> $cat_id])
            ->get();
            // return $posts; //for testing purpose
            // exit();
      return view('admin.postbook.categories',['categories'=>$categories, 'posts'=>$posts]);
    }

    public function createCategory()
    {
        return view('admin.category.createCategory');
    }

    public function addCategory(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:3',
        ]);
        $categories =new Category;
        $categories->name = $request->input('name');
        $categories->save();
        return redirect(route('postbook.index'));
    }

    public function editCategory(){
        $categories = Category::all();
        return view('admin.category.editCategory')->with('categories', $categories);  
    }

    public function editCategoryPage($id){
        $category = Category::find($id);
        return view('admin.category.editCategoryPage')->with('category', $category);  
    }

    public function updateCategory(Request $request, $id){
        $categories = Category::findOrFail($id);
        $categories->name = $request->input('name');
        $categories->update();
        return redirect(route('postbook.index'))->with('status','You have update the category Successfully');
    }

    public function addBook($id){
        $bookUsers = User::findOrFail($id);
        return view('admin.book.user')->with('bookUsers', $bookUsers);  
    }

    // public function editCategoryPage($id){
    //     $category = Category::find($id);
    //     return view('admin.category.editCategoryPage')->with('category', $category);  
    // }

    // about current user datails

    public function adminDetails(){
        $id = Auth::user()->id;
            //
            $data['data'] = DB::table('users')->where('id','=', $id)->first();
            $datas['datas'] = DB::table('users')->where('id','=', $id)->first();
            if(count ($data)>0){
            // return view('publications',compact('data'));
            return view('admin.admin_details.admin_details')->with('data', $data)->with('datas', $datas);
            }
    }

    public function adminEdits(Request $request, $id) {
        $data = User::find($id);
        return view('admin.admin_details.admin_edit')->with('data',$data); 
    }

    public function updateUserRole(Request $request, $id){
        $this->validate($request,[
            // 'name' => ['required', 'alpha','min:3', 'max:255'],
            'name' => ['required','min:3', 'max:255'],
            'email' => [
                'required', 
                'string', 
                'email', 
                'max:255', 
                // 'unique:users',
                new EmailRule(),
            ],
            // 'profile_image'=>[
            //     'nullable',
            //     'mimes:jpeg,png,jpg,gif,svg',
            //     'max:2048',
            // ],
        ]);

         // // Handle file upload/ image of the post
         if($request->hasFile('profile_image')){
            // Get fileName with extension
            $filenameWithExt = $request->file('profile_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just file extension
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameTostore = $filename.'_'.time().'.'.$extension;

            //Uplaode image
            $path = $request->file('profile_image')->storeAs('public/profile_images', $fileNameTostore);//
        }

        $users = User::findOrFail($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        if($request->hasFile('profile_image')){
            $users->profile_image = $fileNameTostore;
        }
        $users->update();
        return redirect(route('adminDetails'))->with('succ','Successfully Updated your details');
    }

    // admin change password 
    public function changePassword(){
        $id = Auth::user()->id;
        //
        $data['data'] = DB::table('users')->where('id','=', $id)->first();
        // $datas['datas'] = DB::table('users')->where('id','=', $id)->first();
        if(count ($data)>0){
        // return view('publications',compact('data'));
        return view('admin.password.changepassword')->with('data', $data);
        }
    }

    public function updatePassword(Request $request){
        $request->validate([
            'old_password'=>'required|min:8|max:20',
            'new_password'=>'required|min:8|max:20|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'confirm_password'=>'required|same:new_password',
        ]);

        $current_user = auth()->user();
        if(Hash::check($request->old_password, $current_user->password)){
            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('success', 'Password successfully updated.');
        }else{
            return redirect()->back()->with('error', 'Old password does not matched.');
        }
    }
}

