<?php

namespace App\Http\Controllers;

use App\Post;
use  App\Comment;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\Hash;

class UserController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function dashboard(){
        return view('users.dashboard'); 
     }

     public function comments(){
      
        return view('users.comments'); 
     }

     public function deleteComments($id){
      Comment::where('id',$id)->where('user_id',Auth::id())->delete();
      return back();
     }

     public function setting(){
      return view('users.profile'); 
     }

   public function settingPost(Request $request){
      $user=Auth::user();
      $user->name=$request['name'];
      $user->save();

      if($request['password'] != ""){
         if(!(Hash::check($request['password'],Auth::user()->password))){
            return redirect()->back()->with('error',"Your Current password does not match with the password provide");
         }
         if(strcmp($request['password'],$request['new_password']) == 0){
            return redirect()->back()->with('error',"New password can not be same as your current password");
         }

         $validation=$request->validate([
            'password'=>'required',
            'new_password'=>'required|string|min:8|confirmed',
         ]);

         $user->password=bcrypt($request['new_password']);
         $user->save();
         return redirect()->back()->with('success',"Password Changed Successfully");
         }
          return back();
   }
      public function profiles(){
      return view('users.profile'); 
     }
     public function applyAuthor(){
      return view('users.applyAuthor'); 
     }
     public function applyPost(){
      return redirect('/user/dashboard') ;
     }
     
}
