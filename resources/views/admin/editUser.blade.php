@extends('layouts.dashboardApp')

@section('title') Admin|EditUser @endsection

@section('content')

<div class="content">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                           <h3>Editing {{$user->name}}</h3>
                        </div>

                      
                       
                    <form method="POST" action="{{route('adminUsertEditUser',$user->id)}}">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label"><h5>User Name</h5></label>
                                    <input id="normal-input" class="form-control" name="name" value="{{$user->name}}">
                                    </div>
                                </div>

                                
                            </div>

                            
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="placeholder-input" class="form-control-label"><h5>User Email</h5></label>
                                        <input id="normal-input" class="form-control" name="email" value="{{$user->email}}">
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label"><h5>Permission</h5></label>
                                        <br>
                                        Author : 
                                        
                                        <input type="checkbox" class="form-control-checkbox" name="author" value=1 {{$user->author==true ? 'checked' :''}}><br>
                                      Admin : 
                    
                                        <input type="checkbox" class="form-control-checkbox" name="admin" value=1 {{$user->admin==true ? 'checked' :''}} >
                                        
                                    </div>
                                    </div>
                                


                              
                            </div>
                            <button class="btn btn-success" type="submit">Create Post</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>


        
</div>
@endsection