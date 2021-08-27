<?php

namespace App\Http\Controllers;

use App\Post;
use  App\Comment;
use  App\Contact;
use App\User;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePost;



class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('checkRole:admin');
       $this->middleware('auth');
    }

   public function dashboard(){
    $posts=Post::all();

    $todayPosts=$posts->where('created_at','>=',\Carbon\Carbon::today())->count();
       return view('admin.dashboard',compact('todayPosts'));
   }

   public function massage(){
    $contacts=Contact::all();
    return view('admin.massage',compact('contacts')); 
    }

   public function posts(){
       $posts=Post::all();
     return view('admin.posts',compact('posts'));
    }

    public function editPosts($id){
        $post=Post::where('id',$id)->first();
      return view('admin.editPost',compact('post'));
     }

     public function postEditPosts(CreatePost $request,$id){
        $post=Post::where('id',$id)->first();
        $post->title=$request['title'];
        $post->content=$request['content'];
        $post->save();
        return redirect('admin/posts')->with('success',"Post updated Successfully");
     }

     public function postDelete($id){
        $post=Post::where('id',$id)->first();
        $post->delete();
        Comment::where('post_id',$id)->delete();

        return back();
     }

    public function comments(){
        $comments=Comment::all();
        return view('admin.comments',compact('comments'));
    }

    public function deleteComments($id){
        Comment::where('id',$id)->delete();
      return back();
    }

    public function users(){
        $users=User::all();
        return view('admin.users',compact('users'));
    }

    public function userDelete($id){
        $user=User::where('id',$id)->delete();
        return back();
    }

    public function editUser(Request $request,$id)
    {
        $user=User::where('id',$id)->first();
        return view('admin.editUser',compact('user'));
     }
     
     public function userEditUser(Request $request ,$id){
        $user=User::where('id',$id)->first();
        if($request['author']==1){
            $user->author=true;
        }else{
            $user->author=false;
        }
        if($request['admin']==1){
            $user->admin=true;
        }else{
            $user->admin=false;
        }
        $user->save();
        return back()->with('success',"Post updated Successfully");

     }

}
