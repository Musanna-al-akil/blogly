@extends('layouts.app')
@section('title')
musanna|home
@endsection
@section('css')
<link rel=”canonical” href=”https://www.beblogly.com/” />

<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
<style>

/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */
/* Carousel base class */
.bigline{
  padding-right: 30px; padding-bottom: 20px;font-size: 45px;
}
.carousel {
  margin-bottom: 3rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}
#carousel-captions {
  bottom: 1.5rem;
  z-index: 10;
}
/* Declare heights because of positioning of img element */
.carousel-item {
  height: 35rem;
  background-color: #777;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 35rem;
}

.ssss {
  height: 23rem !important;
  
}
.ssss > img {
  height: 23rem !important;
}
/* MARKETING CONTENT
-------------------------------------------------- */
/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}

/* Featurettes
------------------------- */
.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}
/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}
/* RESPONSIVE CSS
-------------------------------------------------- */
@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }
  .featurette-heading {
    font-size: 50px;
  }
}
@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }

}
@media (max-width:767px) {
    .carousel-item {
  height: 27rem;
}
.carousel-item > img {
  width: 100%;
  height: 27rem;
}
.minh2,h2{
  font-size: 25px;
}
.minh3{
  font-size: 21px;
}
.ssss {
  height: 18rem !important;
  
}
.ssss > img {
  height: 18rem !important;
}
.btn{
padding:.2rem .4rem;
}
.bigline{
font-size: 32px;
}
}
  .slider {
       width: 100%;
       margin: 30px auto;
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
        opacity: .9;
    }
    .slick-active {
        opacity: .9;
    }
    .slick-current {
        opacity: 1;
    }
    .titl{
        font-size:22px;
    }
    .nam{
        font-size:14px;
    }
    .display{
        display: none;
    }
    </style>
@endsection
@section('content')
  <div class="flex-center position-ref full-height">

           <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          
          @foreach($sh as $i=>$post)
          <div class="carousel-item {{$i==0?"active":" "}}">
           <img class="first-slide" src="/storage/cover_images/{{$post->post->cover_image}}" alt="First slide">
            
            <div class="container">

              <div class="carousel-caption text-left" style="width: 50%">
                <p><a class="btn btn-md btn-light" href="#" role="button">{{$post->post->category->category_name}}</a></p>
                <h2 class="minh2"><a href="{{route('singlePost',[$post->post->slug])}}">{{$post->post->title}}</a></h2>
                <p>{{Str::title($post->post->user->name)}}  |   {{ \Carbon\Carbon::parse($post->post->created_at)->diffForHumans()}}</p>  
              </div>
            </div>
           
          </div>
          @endforeach
          
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

        </div>
        <br>
        <div class="container">
          <div class="row flex-nowrap justify-content-between align-items-center">
                                <div class="col-md-2 pt-1 d-md-down-none">
                                  <a class="text-dark" href="#">THIS WEEK POST
                                  </a>
                                </div>
                                <div class="col-md-8 text-center"><hr></div>
                                <div class="col-md-2 d-flex justify-content-end align-items-center ">
                                  <a class="text-dark d-md-down-none" href="#"> VIEW ALL</a>
                                   
                                </div>
                                </div>
                                <br><br>
                                <div class="row">
                                  <div class="col-md-5" style="padding-right: 40px;" >
                                    <h5 class="btn btn-light"><a class="text-dark" href="">ART</a></h5>
                                    <h2 style="padding-right: 70px; padding-bottom: 20px;">Why Did Reed Krakoff Walk Away from His Brand?</h2>
                                    <span >Carrie Crawford   |   2 mint ago</span>

                                    <img style="width: 100%; padding-top: 30px; height: 350px;" src="1.jpg">
                                  </div>
                                  <div class="col-md-7">
                                    <img style="width: 100%; padding-bottom: 20px;" src="2.jpg">
                                    <br>
                                    <h5 class="btn btn-light"><a class="text-dark" href="">TRAVEL</a></h5>
                                    <h2>Hot Looks: A Fun, Random Beauty Report Straight From The Closet</h2>
                                    <span>Carrie Crawford   |   2 mint ago</span>
                                    
                                  </div>
                                </div>
                                <br>
                                <br>

                                <div class="row">
                                  <div class="col-md-5" style="padding-right: 40px;" >
                                    <h5 class="btn btn-light"><a class="text-dark" href="">ART</a></h5><br>
                                    <h2 class="bigline" >"The Most Beautiful in The World is, Of Course, The World Itself."</h2>
                                    <span >Carrie Crawford   |   2 mint ago</span>

                                  </div>
                                  <div class="col-md-7">
                                    <img style="width: 100%; padding-bottom: 20px;" src="2.jpg">
                                 </div>
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col-md-7" style="padding-right: 40px;" >
                                    
                                    <img style="width: 100%; padding-bottom: 20px;" src="2.jpg">
                                   
                                    <h5 class="btn btn-light"><a class="text-dark" href="">ART</a></h5>
                                    <h2 style="padding-right: 70px; padding-bottom: 20px;">Why Did Reed Krakoff Walk Away from His Brand?</h2>
                                    <span >Carrie Crawford   |   2 mint ago</span>
                                  </div>
                                  <div class="col-md-5">
                                    <h5 class="btn btn-light"><a class="text-dark" href="">TRAVEL</a></h5>
                                    <h2>Hot Looks: A Fun, Random Beauty Report Straight From The Closet</h2>
                                    <span>Carrie Crawford   |   2 mint ago</span>
                                    <br>
                                     <img style="width: 100%; padding-top: 30px; height: 350px;" src="1.jpg">
                                    
                                    </div>
                                </div>
                                <br>
                                <br>
                                 <div class="row flex-nowrap justify-content-between align-items-center">
                                <div class="col-md-2 pt-1 d-md-down-none">
                                  <a class="text-dark" href="#">POPULAR STORY</a>
                                      
                                </div>
                                <div class="col-md-8 text-center">
                                  <hr>
                                </div>
                                <div class="col-md-2 d-flex justify-content-end align-items-center ">
                                  <a class="text-dark d-md-down-none" href="#">VIEW ALL</a>
                                    
                                </div>
                                </div><br>
                                
                  <div class="slider autoplay">
            @foreach($posts as $i=>$post)
        
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
        <br><br><br>
  
   <div class="flex-center position-ref full-height">

           <div id="myCarousels" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousels" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousels" data-slide-to="1"></li>
          <li data-target="#myCarousels" data-slide-to="2"></li>
          <li data-target="#myCarousels" data-slide-to="3"></li>
          <li data-target="#myCarousels" data-slide-to="4"></li>
          <li data-target="#myCarousels" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          
          @foreach($sh as $i=>$post)
          <div class="carousel-item ssss {{$i==0?"active":" "}}">

            <img class="first-slide" src="/storage/cover_images/{{$post->post->cover_image}}" alt="First slide">
            
           <div class="container">

              <div id="carousel-caption" class="carousel-caption text-left" style="width: 60%">
               
                <p><a class="btn btn-md btn-light" href="#" role="button">{{$post->post->category->category_name}}</a></p>
                <h3 class="minh3">{{$post->post->title}}</h3>
                <p>{{Str::title($post->post->user->name)}}  |   {{ \Carbon\Carbon::parse($post->post->created_at)->diffForHumans()}}</p>
                
              </div>
             </div>
          </div>
          @endforeach
          
       </div>
      </div>
@endsection
@section('js')
<script src="{{ asset('js/slick.min.js') }}"></script>
   <script type="text/javascript">
      $('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  prevArrow: $(".nn2"),
  nextArrow: $(".pp2"),
  });
    </script>
      @endsection