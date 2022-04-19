<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\EmailRule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;
use Hash;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function userDashboard()
    {
        return view('user.home');
    }

    public function ownPosts()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // return view('user.editDelete')->with('posts',$user->posts);
        return view('user.ownposts')->with('postReviews',$user->postReviews);
    }

    public function changepassword()
    {
        $id = Auth::user()->id;
        //
        $data['data'] = DB::table('users')->where('id','=', $id)->first();
        // $datas['datas'] = DB::table('users')->where('id','=', $id)->first();
        if(count ($data)>0){
        // return view('publications',compact('data'));
        return view('user.changepassword')->with('data', $data);
        }
    }
    public function update_password(Request $request)
    {
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

    // update users details controller
    public function userDetails(){
        $id = Auth::user()->id;
            //
            $data['data'] = DB::table('users')->where('id','=', $id)->first();
            $datas['datas'] = DB::table('users')->where('id','=', $id)->first();
            if(count ($data)>0){
            // return view('publications',compact('data'));
            return view('user.details.user_details')->with('data', $data)->with('datas', $datas);
            }
    }

    public function userEdits(Request $request, $id) {
        $data = User::find($id);
        return view('user.details.edit_user_detail')->with('data',$data); 
    }

    public function updateUser(Request $request, $id){
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
        return redirect(route('userDetails'))->with('succ','successfilly Updated your details');
    }
}


