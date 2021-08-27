@extends('layouts.dashboardApp')

@section('title') Admin|Comments @endsection

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
										<th>PostTitle</th>
										<th>Comment</th>
                                        <th>Create At</th>
                                        <th>Action</th>
										
									</tr>
									</thead>
									<tbody>
										@foreach($comments as $comment)
										<tr>
										<td>{{$comment->id}}</td>
										<td class=""><a href="/post/{{$comment->post->sliug}}">{{Str::words($comment->post->title,7)}}</a></td>
										<td>{{Str::words($comment->content,25)}}</td>
										<td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</td>
										<td>
											<form id="deleteComment{{$comment->id}}" action="{{route('adminDeleteComments',$comment->id)}}" method="POST">
												@csrf
											</form>
										<button type="button" class="btn btn-danger" onclick="document.getElementById('deleteComment{{$comment->id}}').submit()">X</button>
										</td>
											
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