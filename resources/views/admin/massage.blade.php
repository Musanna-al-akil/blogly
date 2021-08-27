@extends('layouts.dashboardApp')

@section('title') Massage|admin @endsection

@section('content')

<div class="content">
            
                <div class="card">
                    <div >
                            
                        <div class="card-header bg-light">
                                
                            <h5>Author Posts</h5>
                        </div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>title</th>
                                        <th>content</th>
                                        <th>Create At</th>
                                       
                                        <th>Action on Post</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $post)
                                        <tr>
                                        <td>{{$post->name}}</td>
                                        <td class="text-nowrap"><a href="">{{$post->email}}</a></td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->content}}</td>
                                        <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</td>
                                        
                                        
                                        <td>
                                                <form style="display:none;" method="POST" id=""action="">@csrf</form> 
                                        <a href="" class="btn btn-warning"><i class="icon icon-pencil"></i></a>
                                        
                                        <a href="#" class="btn btn-danger"  data-toggle="modal" data-target="">X</a>
                                        </td>
                                        
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection