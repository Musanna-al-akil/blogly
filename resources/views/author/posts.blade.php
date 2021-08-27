@extends('layouts.dashboardApp')

@section('title') Author|Posts @endsection

@section('content')

      <div class="content">
			
				<div class="card">
					<div >
                            
						<div class="card-header bg-light">
                                
							<h5>Author Posts</h5>
						</div>
                        @if(Session::has('success'))
                        <div class="alert alert-primary">{{Session::get('success')}}</div>
                            @endif
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
									<tr>
										<th>ID</th>
										<th>Post Title</th>
										<th>Create At</th>
                                        <th>Update At</th>
                                        <th>Comments</th>
										<th>Action on Post</th>
									</tr>
									</thead>
									<tbody>
										@foreach(Auth::user()->posts as $post)
										<tr>
										<td>{{$post->id}}.</td>
										<td class=""><a href="{{route('singlePost',[$post->slug])}}">{{$post->title}}</a></td>
										<td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</td>
                                        <td>{{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}</td>
                                        <td>{{$post->comments->count()}}</td>
                                        <td>
                                                <form method="POST" id="ab-{{$post->id}}"action="{{route('postDelete',$post->id)}}">@csrf</form> 
                                        <a href="{{route('editPosts',$post->id)}}" class="btn btn-warning">edit</a>
                                        
                                        <a href="#" class="btn btn-danger" onclick="document.getElementById('ab-{{$post->id}}').submit()">Delete</a>
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