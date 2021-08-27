@extends('layouts.dashboardApp')

@section('title') Admin|EditPost @endsection

@section('content')

<div class="content">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                           <h3>Editing {{$post->title}}</h3>
                        </div>

                      
                       
                    <form method="POST" action="{{route('adminPostEditPosts', $post->id)}}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label"><h5>Post Title</h5></label>
                                    <input id="normal-input" class="form-control" name="title" value="{{$post->title}}">
                                    </div>
                                </div>

                                
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="placeholder-input" class="form-control-label"><h5>Post Content</h5></label>
                                        <textarea class="form-control" cols="30" name="content" id="editor" placeholder="Post Content"  rows="10">{{$post->content}}</textarea>
                                    </div>
                                </div>

                              
                            </div>
                            <button class="btn btn-success" type="submit">Update Post</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>


        
</div>
@endsection
@section('jsd')
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection