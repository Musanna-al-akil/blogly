@extends('layouts.app')
@section('title')
title
@endsection
@section('css')
    <style>
       .col-md-c3{
        -webkit-box-flex:0;
      -ms-flex:0 0 25%;
      flex:0 0 25%;
      max-width:25%;
      position:relative;width:100%;min-height:1px;padding-right:12px;padding-left:5px;padding-top: 5px; border-right-style:solid;
      }
      .cate{
          
          letter-spacing: 3px;     }
          .btn-cen{
                padding-top: 10px;
          }
          .col-md-c8{-webkit-box-flex:0;
      -ms-flex:0 0 70.666667%;
      flex:0 0 70.666667%;
      max-width:70.666667%;
    }
      .col-md-c4{-webkit-box-flex:0;
      -ms-flex:0 0 29.333333%;
      flex:0 0 29.333333%;
      max-width:29.333333%;
      }
      .col-md-c3{
        -webkit-box-flex:0;
      -ms-flex:0 0 25%;
      flex:0 0 25%;
      max-width:25%;
      position:relative;width:100%;min-height:1px;padding-right:12px;padding-left:5px;padding-top: 5px;border: solid 0 0 0 2px black;
      border-left-style: solid 2px;
      }
      .col-md-c1{-ms-flex:0 0 10.666667%;flex:0 0 10.666667%;max-width:10.666667%;}
      .col-md-c8,.col-md-c4,.col-md-c1{position:relative;width:100%;min-height:1px;padding-right:12px;padding-left:12px;}
      @media (max-width:767px) {
  .abc {
    display: none;
  }
  @media (max-width:500px) {
  .ach {
    font-size: 27px;
  }
}
    </style>

  @endsection
@section('content')

<header class="page-footer font-small stylish-color-dark pt-3">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-8 mx-auto">

        <!-- Content -->
        <h1 style="text-align: left;" class="ach" >{{$post->title}}</h1>
        <div class="row">
                            <div class="col-md-c1 mx-auto">
                                 <img class="rounded-circle" src="{{asset('admin/assert/imgs/avatar-1.png')}}" alt="Generic placeholder image" width="60" height="60">
                            </div>
                           
                                <div class="col-md-c3 mx-auto">
                                    <a class="text-dark " href="#">BY  <b>{{Str::title($post->user->name)}}</b></a>
                                <p>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
                                </div>
                                
                                <div class="col-6 col-sm-4 text-center">
                                    <div class="btn-cen">
                                        <h6 class="btn btn-light cate">{{$post->category->category_name}}</h6>
                                        </div></div>
                                <i class="fa fa-comment" aria-hidden="true"></i>{{$post->comments->count() }} 
                                
                                 <img style="width:100%; alain:center;"  src="/storage/cover_images/{{$post->cover_image}}">
                    <hr>
                           <br>
                           <br>
                            <div class="mx-auto">
                                    {!! nl2br($post->content)!!}
                                </div>
                           <br>
                        </div>
                         <div class="row flex-nowrap justify-content-between align-items-center">
                                <div class="col-md-3 pt-1 d-md-down-none">
                                  <a class="text-dark" href="#">
                                      PREVIOUS STORY
                                  </a>
                
                                </div>
                                <div class="col-md-3 text-center">
                    
                                  <hr>
                    
                                </div>
                                <div class="col-md-3 d-flex justify-content-end align-items-center ">
                                  <a class="text-dark d-md-down-none" href="#">
                                    NEXT STORY
                                  </a>
                                  
                                </div>
                             
                        </div>
                    <br>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <div class="card">
                    <br>
                    <img class="rounded-circle mx-auto" src="{{asset('admin/assert/imgs/avatar-1.png')}}" alt="image" width="130" height="130">
                    <br>
                    <h3 class="mx-auto">Clifford Kelley</h3>
                    <p class="mx-auto">Natural Photographer </p>
                    <p class="justify-content-center">
                            This is a custom author box widget where you can display your photo, social media links and some information about yourself.
                    </p>
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                </div>
                <br>
                <div class="row">
                        <div class="col-md-6">
                            <h5>Recent Post</h5>
                        </div> 
                        <div class="col-md-6">
                            <hr>
                        </div>
                    </div>
                 @foreach($posts as $post)
                                            <div class="post-preview">
                                                <a class="text-dark" href="{{$post->path()}}"><h5 >{{$post->title}}</h5></a>
                                            </div>
                                                <p class="post-meta">
                                                    post by<a class="text-dark" href="#"> {{$post->user->name}}</a>
                                                    
                                                    </p>
                                        @endforeach
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <!-- Grid column -->

     
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
</header>
@endsection


   <br>
                            <div class="card">
                                    <div class="card-header bg-light">
                                       <h3>Leave A Replay</h3>
                                    </div>
                            
                                    @if(Session::has('success'))
                                <div class="alert alert-primary">{{Session::get('success')}}</div>
                                    @endif
                            
                                    @if($errors->any())
                                    <div >
                                        <ul class="alert alert-danger">
                                            @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                <form method="POST" action="{{route('postComment')}}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="placeholder-input" class="form-control-label"><h5>Comment Section</h5></label>
                                                    <textarea class="form-control" cols="30" name="content" id="" placeholder="Comment*"  rows="5"></textarea>
                                                     @guest
                             <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="normal-input" class="form-control-label"></label>
                                      <input id="normal-input" class="form-control" type="email" name="title" placeholder="Enter Your Email Address">
                                  </div>
                              </div>
                            <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="normal-input" class="form-control-label"></label>
                                      <input id="normal-input" class="form-control" type="text" name="title" placeholder="Enter Your Name">
                                  </div>
                              </div>
                            </div>
                          @else 
                          @endguest
                                                <input type="hidden" name="post" value="{{$post->id}}">
                                                </div>
                                            </div>
                            
                                          
                                        </div>
                                        <button class="btn btn-success" type="submit">Post Comment</button>
                            
                                    </div>
                                    </form>
                                
                            </div>
                            <br>
                                <div class="comments">
                                
                                
                                        <h2>Comments</h2>
                                        
                                        @foreach($post->comments as $comment)
                                        <p>{{$comment->content}}</p>
                                        <p><small> by <b>{{Str::title($comment->user->name)}}</b> ||
                                        {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</small></p>
                                        @endforeach
                                    </div>