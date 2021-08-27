@extends('layouts.dashboardApp')

@section('title') author|Comments @endsection

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
										<th>Post title</th>
										<th>Comment</th>
										<th>Create At</th>
										
									</tr>
									</thead>
									<tbody>
										@foreach($comments as $comment)
										<tr>
										<td>{{$comment->id}}</td>
										<td class=""><a href="/post/{{$comment->post->slug}}">{{$comment->post->title}}</a></td>
										<td>{{$comment->content}}</td>
										<td>{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</td>
										<td>
											
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