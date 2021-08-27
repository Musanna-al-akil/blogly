<?php

namespace App\Http\Controllers;

use App\Post;
use  App\Comment;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePost;
use App\Http\Middleware\CheckRole;
use App\Category;
class AuthorController extends Controller
{
    public function __construct()
    {
      $this->middleware('checkRole:author');
       $this->middleware('auth');
    }

    public function dashboard(){

    $posts=Post::where('user_id',Auth::id())->pluck('id')->toArray();

    $allComments=Comment::whereIn('post_id',$posts)->get();

    $todayComments=$allComments->where('created_at','>=',\Carbon\Carbon::today())->count();

      return view('author.dashboard', compact('allComments','todayComments')); 
   }

   public function posts(){
    return view('author.posts'); 
    }
    

    public function comments(){
        $posts=Post::where('user_id',Auth::id())->pluck('id')->toArray();
        $comments=Comment::whereIn('post_id',$posts)->get();
        return view('author.comments',compact('comments')); 
    }

    public function newPost(){
        $categories=Category::all();
        return view('author.newPost',compact('categories')); 
    }

    public function createPost(CreatePost $request){

        if($request->hasFile('cover_image')){
            //Get filename with the extension
            $id=Auth::id();
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //GET just filename
            $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //fileNameToStore
            $fileNameToStore =$id.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
    
           }else{
               $fileNameToStore ='noimage.jpg';
           }

        $post=new Post();
        $post->title=$request['title'];
        $post->content=$request['content'];
        $post->user_id=Auth::id();
        $post->slug=str_slug($request->title);
        $post->meta_title=str_limit($request->title,70);
        $post->meta_description=str_limit($request->content,150,'...');
        $post->cover_image=$fileNameToStore;
        $post->category_id=$request['conten'];
        $post->save();

        return back()->with('success','Post is successfully Created.');
    }

    public function editPosts($id){
        $post=Post::where('id',$id)->where('user_id',Auth::id())->first();

        return view('author.editPost',compact('post'));
     }

     public function postEditPosts(CreatePost $request,$id){

        if($request->hasFile('cover_image')){
            $ids=Auth::id();
            //Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //GET just filename
            $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //fileNameToStore
            $fileNameToStore = $ids.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
    
           }

        $post=Post::where('id',$id)->where('user_id',Auth::id())->first();
        $post->title=$request['title'];
        $post->content=$request['content'];
        if($request->hasFile('cover_image')){
            $post->cover_image=$fileNameToStore;
        }
        $post->save();
        return redirect('author/posts')->with('success',"Post updated Successfully");
     }
     
     public function postDelete($id){
        $post=Post::where('id',$id)->where('user_id',Auth::id())->first();
        $post->delete();
        Comment::where('post_id',$id)->delete();
if($post->cover_image !== 'noimage.jpg'){
          //Delete Image
          Storage::delete('public/cover_images/'.$post->cover_image);
        }

        return back();
     }
}
