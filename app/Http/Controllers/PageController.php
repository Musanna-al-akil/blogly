<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Category;
use App\Contact;
use App\Tag;
use App\HomeSlider;
use Illuminate\support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Collection;

class PageController extends Controller
{
    
    public function index(){
        $sh=HomeSlider::all();
        $posts=Post::latest('visitor_count')->paginate(6);
    	return view('pages.home',compact('sh','posts'));
    }

    public function about(){
        $posts=Post::where('category_id','=',1)->latest('created_at')->get();
        return view('pages.about',compact('posts'));
    	
    }

    public function privacy(){
    	return view('pages.privacy');
    }

    public function contact(){
    	return view('pages.contact');
    }
    public function contactSubmit(Request $request){
        $this->validate($request,array(
            'name'=>'required|max:60',
            'email'=>'required|email',
            'title'=>'required|max:60',
            'content'=>'required',
        ));
        
        $contact=new Contact;
        
        $contact->title=$request['title'];
        $contact->name=$request['name'];
        $contact->email=$request['email'];
        $contact->content=$request['content'];
        $contact->save();
        return redirect()->route('contact')->with('success',"Form Updated Successfully");
    }

     public function disclaimer(){
        return view('pages.disclaimer');
    }

    public function development(){
        $posts=Post::where('category_id','=',1)->latest('created_at')->get();
        return view('pages.dev',compact('posts'));
    }

    public function tech(){
        $posts=Post::where('category_id','=',2)->latest('created_at')->get();
    
    return view('pages.tech',compact('posts'));
    }

    public function game(){
        $posts=Post::where('category_id','=',3)->latest('created_at')->get();
        return view('pages.game',compact('posts'));
    }

    public function food(){
        $posts=Post::where('category_id','=',4)->latest('created_at')->get();
        return view('pages.food',compact('posts'));
    }
    public function singlePost($slug){
        $post=Post::whereSlug($slug)->first();
        $prev_id=Post::where('id','<',$post->id)->max('id');
        $next_id=Post::where('id','>',$post->id)->min('id');

        $next=Post::find($next_id);
        $prev=Post::find($prev_id);
       $blogKey='blog_' .$post->id;
        if(!Session::has($blogKey)){
            $post->increment('visitor_count');
            Session::put($blogKey,1);
        }
        $posts=Post::latest('created_at')->paginate(5);
        $categorise=Category::all();
        $tags=Tag::all();
        $postl=Post::latest('visitor_count')->paginate(6);
        
        return view('pages.singlePost',compact('post','categorise','tags','postl'))->with('posts', $posts)->with('prev',$prev)->with('next',$next);
    }


    public function comment(Request $request){
        $comment=new Comment();
        if(Auth::check() == false ){
        $comment->post_id=$request['post'];   
        $comment->email=$request['email'];
        $comment->content=$request['content'];
        $comment->name=$request['name'];
        $comment->save();
        }else{
        $comment->post_id=$request['post'];
        $comment->user_id=Auth::id();
        $comment->content=$request['content'];
        $comment->name=Auth::name();
        $comment->save();
        }
        
        
        return back()->with('success',"Comment updated Successfully");
     }
}
