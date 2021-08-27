@extends('layouts.dashboardApp')

@section('title') Admin|User @endsection
@section('css')
<style type="text/css">
    .aaa{
        padding-top: 10px;
        padding-left:40px; 
    }
</style>
@endsection
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
										
										<th>Name</th>
                                        <th>Email</th>
                                        <th>Posts</th>
                                        <th>comments</th>
                                        <th>Created At</th>
                                        <th>Action</th>
										
									</tr>
									</thead>
									<tbody>
										@foreach($users as $user)
										<tr>
										
										<td class="text-nowrap"><a >{{$user->name}}</a></td>
										<td>{{$user->email}}</td>
                                        <td>{{$user->posts->count()}}</td>
                                        <td>{{$user->comments->count()}}</td>
                                        <td>{{\Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
										<td>
                                            <a class="btn btn-warning" href="{{route('adminEditUser',$user->id)}}"><i class="icon icon-pencil"></i></a>
											<form style="display:none" id="deleteComment{{$user->id}}" action="{{route('adminUSerDelete',$user->id)}}" method="POST">
												@csrf
											</form>
										<button type="button" class="btn btn-danger" onclick="document.getElementById('deleteComment{{$user->id}}').submit()">X</button>
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

			 <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-10 aaa">
                    <h3>Edit Category:</h3>
                </div>
                <div  class="col-md-2 aaa">
                    <a class="btn btn-primary " href="{{route('category.index')}}">Edit</a>
                </div>
                    </div>
                </div>
              </div>
      	<div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-10 aaa">
                    <h3>Edit Tag:</h3>
                </div>
                <div  class="col-md-2 aaa">
                    <a class="btn btn-primary " href="{{route('tag.index')}}">Edit</a>
                </div>
                    </div>
                </div>
              </div>

@endsection