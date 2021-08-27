@extends('layouts.dashboardApp')

@section('title') User|Comments @endsection

@section('content')

      <div class="content">
			
				<div class="col-md-12">
					<div class="card">
						<div class="card-header bg-light">
							<h5>Comments On Posts</h5>
						</div>
		
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
									<tr>
										<th>ID</th>
										<th>Post</th>
										<th>Content</th>
										<th>Create At</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
										@foreach(Auth::user()->comments as $comment)
										<tr>
										<td>{{$comment->id}}</td>
										<td class="text-nowrap"><a href="/post/{{$comment->post->slug}}">{{$comment->post->title}}</a></td>
										<td>{{$comment->content}}</td>
										<td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</td>
										<td>
											<form id="deleteComment{{$comment->id}}" action="{{route('deleteComments',$comment->id)}}" method="POST">
												@csrf
											</form>
										<button type="button" class="btn btn-danger" onclick="document.getElementById('deleteComment{{$comment->id}}').submit()">X</button>
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