@extends('layouts.app')
@section('title')
{{$post->meta_title}}|musanna
@endsection
@section('description')
{{$post->meta_description}}
@endsection
@section('css')
<meta name=”robots” content=”noindex, nofollow”>

<meta property="og:url" content="musanna.com/post/{{$post->slug}}" />
<meta property="og:type"          content="blog" />
<meta property="og:title"         content="Your Website Title" />
<meta property="og:description"   content="Your description" />
<meta property="og:image"         content="musanna.com/storage/cover_images/{{$post->cover_image}}" />

<meta name=”twitter:title” content=”TITLE OF POST OR PAGE”>
<meta name=”twitter:description” content=”DESCRIPTION OF PAGE CONTENT”>
<meta name=”twitter:image” content=”LINK TO IMAGE”>
<meta name=”twitter:site” content=”@USERNAME”>
<meta name=”twitter:creator” content=”@USERNAME”>

<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
     <style type="text/css">
    .slider {
         width: 100%;
        margin: 50px auto;
    }
    .slick-slide {
        margin: 0px 20px;
    }
    .slick-slide img {
        width: 100%;
    }
    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
    }
    .slick-active {
        opacity: 1;
    }
    .slick-current {
        opacity: 1;
    }
        
       .col-md-c3{
        -webkit-box-flex:0;
      -ms-flex:0 0 25%;
      flex:0 0 25%;
      max-width:25%;
      position:relative;width:100%;min-height:1px;padding-right:12px;padding-left:5px;padding-top: 5px; border-right:solid 1px;
      }
      .img{
       padding: 20px 0;
      }
      .cate{
          letter-spacing: 3px;     }
      .btn-cen{
           padding-top: 10px;
      }
      .col-md-c8{
          -webkit-box-flex:0;
          -ms-flex:0 0 70.666667%;
          flex:0 0 70.666667%;
          max-width:70.666667%;
      }
      .col-md-c4{
        -webkit-box-flex:0;
        -ms-flex:0 0 29.333333%;
        flex:0 0 29.333333%;
        max-width:29.333333%;
      }
      .acb{
        border-right:solid 1px;
      }
   
      .col-md-c1{-ms-flex:0 0 10.666667%;flex:0 0 10.666667%;max-width:10.666667%;}
      .col-md-c8,.col-md-c4,.col-md-c1{position:relative;width:100%;min-height:1px;padding-right:12px;padding-left:12px;}
      @media (max-width:767px) {
  .abc {
    display: none;
  }
  .acb{
    border-right:0;
  }
}
  @media (max-width:995px) {
  .qqq{
    padding: 0 !important;
  }
  .circle{
    width: 60px;
    height: 60px;
  }
  .recent{
    font-size: 17px;
  }
  .aas{
    width: 0!important;
  }
   .cate{
    letter-spacing: 1.5px;     }
  }

 @media (max-width:575px) {
  .sss p{
    padding: 12px;
    font-size: 15px; 
  }
  .sss h2,h3,h4{
    padding: 12px;
  }
 .ach {
    font-size: 27px;
  }
  .qqq{
    font-size: 13px;
  }
}
.titl{font-size:22px;}
.nam{font-size:14px;}
.display{ display: none;}
</style>
@endsection

@section('content')
<div id="fb-root"></div>
<br>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
<header class="page-footer font-small stylish-color-dark pt-3">
<!-- Footer Links -->
  <div class="container text-center text-md-left">
  <!-- Grid row -->
    <div class="row">
    <!-- Grid column -->
      <div class="col-md-8 mx-auto">
        <!-- Content -->
        <h1 style="text-align: left;" class="ach" >{{$post->title}}</h1>
        <br>
        <div class="row">
          <div class="row" style="width: 100%">
                  <div class="col-md-2 ">
                      <img class="rounded-circle" src="{{asset('admin/assert/imgs/avatar-1.png')}}" alt="Generic placeholder image" width="60" height="60">
                  </div>
                  <div class="col-md-4 mx-auto acb qqq">
                      <a class="text-dark " href="#">BY  <b>{{Str::title($post->user->name)}}</b></a>
                      <p>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
                  </div>
                  <div class="col-md-4  btn-cen acb qqq text-center">
                      <h6 class="btn btn-light text-center cate"><a class="text-dark" href="/{{str::title($post->category->category_name)}}"> {{$post->category->category_name}}</a></h6>
                  </div>
                  <div class="col-md-2 qqq">
                      <i class="fa fa-comment" aria-hidden="true"></i>{{$post->comments->count() }} 
                      <div class="fb-share-button" data-href="https://musanna.ga/posts/18" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
                      </div>
                  </div>
                </div><br>
                    <img class="img" style="width:100%; alain:center;"  src="/storage/cover_images/{{$post->cover_image}}">
                    <hr><br>
                    <div class="mx-auto sss" style="text-align: left;">{!! nl2br($post->content)!!}
                    </div>
                    <br>
                    <br>
                </div>
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-md-3 pt-1 d-md-down-none">
                      <a class="text-dark" href="{{route('singlePost',[$prev->slug])}}">PREVIOUS STORY</a>
                    </div>
                    <div class="col-md-6 text-center">
                        <hr>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end align-items-center ">
                    <p><a class="text-dark d-md-down-none" href="{{route('singlePost',[$next->slug])}}">NEXT STORY</a>
                    
                    </div>
                </div>
                 <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-md-4 pt-1 d-md-down-none">
                      <a class="text-dark" href="{{route('singlePost',[$prev->slug])}}">{{Str::words($prev->title,5)}}</a>
                    </div>
                    
                    <div class="col-md-4 d-flex justify-content-end align-items-center ">
                    <a class="text-dark d-md-down-none" href="{{route('singlePost',[$next->slug])}}">{{Str::words($next->title,5)}}</a>
                    
                    </div>
                </div>
                
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
                                <textarea class="form-control"cols="30"name="content" placeholder="Comment*"rows="5"></textarea>
                                      @guest
                             <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="normal-input" class="form-control-label"></label>
                                  <input id="normal-input" class="form-control" type="email" name="email" placeholder="Enter Your Email Address" value="">
                                </div>
                              </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="normal-input" class="form-control-label"></label>
                                <input id="normal-input" class="form-control" type="text" name="name" placeholder="Enter Your Name" value="">
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
                  <p style="text-align: left;">{{$comment->content}}</p>
                  <p style="text-align: left;"><small> by <b>{{$comment->name}} </b>  || {{\Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</small></p>
                   @endforeach
            </div>
            <br> <br>
          </div>
      <!-- Grid column -->
          <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->
          <div class="col-md-4 mx-auto">

        <!-- Links -->
          <div class="abc">
            <div class="card d-md-down-none ">
              <br>
              <img class="rounded-circle mx-auto" src="{{asset('admin/assert/imgs/avatar-1.png')}} " alt="image" width="130" height="130">
              <br>
              <h3 class="mx-auto">Clifford Kelley</h3>
              <p class="mx-auto">Natural Photographer </p>
              <p class="justify-content-center">This is a custom author box widget where you can display your photo, social media links and some information about yourself.</p>
              <i class="fab fa-facebook" aria-hidden="true"></i>
            </div>
          </div>
            <br>
            <div class="row">
              <div class="col-md-5">
                <h5>Recent Post</h5>
              </div> 
              <div class="col-md-7"><hr></div>
            </div>
                 @foreach($posts as $post)
              <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-md-3 pt-1 d-md-down-none">
                  <a class="text-dark" href="#">
                    <img class="rounded-circle circle" src="/storage/cover_images/{{$post->cover_image}}" alt="Generic placeholder image" width="75" height="75"></a>
                </div>
                  <div class="col-md-9 d-flex  align-items-center ">
                    <a  class="text-dark " href="{{route('singlePost',[$post->slug])}}"><h5 class="recent">{{$post->title}}</h5>
                    <p>post by  {{$post->user->name}}</p></a>
                  </div>
                </div>
                       @endforeach
                    <br>
                <div class="row">
                  <div class="col-md-5">
                    <h5>CATEGORIES</h5>
                  </div> 
                  <div class="col-md-7"><hr></div>
                    <div style="padding-left:20px; ">
                       <br>
                        @foreach($categorise as $category)
                        <h6 class="btn btn-light text-center cate"><a class=" text-dark" href="/{{Str::title($category->category_name)}}"> {{$category->category_name}}</a></h6>
                                        
                          @endforeach
                    </div>
                  </div>  
                     <div class="row">
                        <div class="col-md-5">
                            <h5>CATEGORIES</h5>
                        </div> 
                        <div class="col-md-7">
                            <hr>
                        </div>
                        <div style="padding-left:20px; ">
                          <br>
                          @foreach($tags as $tag)
                          <div>
                            <h6 class="btn btn-light text-center cate"><a class=" text-dark" href="/{{Str::title($tag->title)}}"> {{$tag->title}}</a></h6>
                          </div>          
                          @endforeach
                        </div>
                    </div>  
      </div>
      <!-- Grid column -->
    <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->
      
      <!-- Grid column -->
  </div>
    <!-- Grid row -->
  <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-md-2 pt-1 d-md-down-none">
              <a class="text-dark" href="#">RELATED STORY</a>
            </div>
            <div class="col-md-8 text-center"><hr></div>
              <div class="col-md-2 d-flex justify-content-end align-items-center ">
                <a class="text-dark d-md-down-none" href="#">VIEW ALL</a>
              </div>
            </div>
           <div class="slider autoplay">
            @foreach($postl as $i=>$post)
        
                <div>
                  <div class="row">
                          <div class="{{$i %2==0?"order-md-2":" "}}" >
                             
                            <img  style="width:100%; align:center;"  src="/storage/cover_images/{{$post->cover_image}}">
                          </div>
                          <div>
                            <br class="{{$i %2==0?"display":" "}}">
                            <a href="/{{Str::title($post->category->category_name)}}"><p class="btn btn-light">{{$post->category->category_name}}</p></a>
                          <a href="{{route('singlePost',[$post->slug])}}"><h3 class="post-title titl">{{Str::title($post->title)}}</h3></a>

                          <p class="nam"> {{$post->user->name}} | {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
                          </div>
                        
                        </div>        
                        </div>
                                @endforeach
                  </div>
        <div class="container">
                    <div style="text-align:center;">
                      <span><a class="btn  btn-primary nn2" href="#" role="button"><---</a></span>
                      <span><a class="btn  btn-primary pp2" href="#" role="button">---></a></span>
                    </div>
                  </div>
              <br><br>   
  </div>
</header>
 
@endsection
@section('js')
<script src="{{ asset('js/slick.min.js') }}"></script>
 <script type="text/javascript">
     $('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  prevArrow: $(".nn2"),
  nextArrow: $(".pp2"),
});
</script>
@endsection