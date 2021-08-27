@extends('layouts.app')
@section('title')
Game|musanna
@endsection
@section('css')
<style type="text/css">
  .post-title{
  font-family: 'Playfair Display', serif;
}
.lead{
  font-family: 'Roboto', sans-serif !important;
  font-size: 16px !important;
   @media (max-width:575px) {
  .lead p{
    padding: 12px;
    font-size: 15px; 
  }
}</style>
@endsection
@section('content')
 <br>
<div class="container">

      <div class="container marketing">


        <!-- START THE FEATURETTES -->
        @foreach($posts as $i=>$post)
        <br>
<div class="card">
        <div class="row featurette">
          <div class="col-md-7 {{$i %2==0?"order-md-2":" "}}">
             <a href="{{route('singlePost',[$post->slug])}}"><h2 class="post-title">{{Str::title($post->title)}}</h2></a>
            <div class="lead">{!! nl2br( Str::words($post->content,55) )!!}</div>
            <p class="post-meta">
                        Post by<a href="#"> {{Str::title($post->user->name)}}</a>
                         on {{date_format($post->created_at,'F d,Y')}} |
                         <i class="fa fa-comment" aria-hidden="true"></i>{{$post->comments->count() }} |
                         <i class="fa fa-eye"></i>
                         {{$post->visitor_count }}
                        </p>
          </div>
          <div class="col-md-5">
          <img style="width:100%; align:center;"  src="/storage/cover_images/{{$post->cover_image}}">
          </div>
        </div>
</div>
        @endforeach

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container --><br>
@endsection
