@extends('layouts.dashboardApp')

@section('title') CategoryEdit | Admin| @endsection

@section('content')
	<div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-8">
                    <div class="card p-4">
					<div class="card-header bg-light">
							<h5>Tags</h5>
						</div>
		
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped">
									<thead>
									<tr>
										
										<th>Id</th>
                                        <th>Name</th>
                                        
                                        <th>Created At</th>
                                        <th>Action</th>
										
									</tr>
									</thead>
									<tbody>
										<form method="POST" action="{{route('CategoryUpdate')}}">@csrf
										@foreach($categories as $c)
										<tr>
										
										<td class="text-nowrap"><a >{{$c->id}}</a></td>
										
										<td><input value="{{$c->category_name}}"></td>
                                      
                                        <td>{{\Carbon\Carbon::parse($c->created_at)->diffForHumans()}}</td>
										<td>
                                             
										</td>
										
										
										</tr>
										@endforeach
											<button class="btn btn-primary" type="submit">Change Tag</button>
										</form>
									</tbody>
								</table>
							</div>
						</div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="card p-4">
					<div class="well">
                        <form method="POST"  action="{{route('category.store')}}">@csrf
                        <h3>Add Category</h3>
                        <label for="normal-input" class="form-control-label"><h5>Name</h5></label>
                                    <input id="normal-input" class="form-control" name="name" value="" placeholder="name">

                                    <button class="btn btn-success" type="submit">Create </button>
                                    </form>
                                    </div>
                    </div>
                </div>
              
                    
                </div>
            </div>
    
            
        </div>
</div>
@endsection