@extends('layouts.dashboardApp')

@section('title') User|dashboard @endsection
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
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{Auth::user()->comments->count( )}}</span>
                                <span class="font-weight-light">Comments</span>
                            </div>
    
                            <div class="h2 text-muted">
                                <i class="icon icon-book-open"></i>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{Auth::user()->comments->unique('post_id')->count()}}</span>
                                <span class="font-weight-light">Comment Post</span>
                            </div>
    
                            <div class="h2 text-muted">
                                <i class="icon icon-paper-clip"></i>
                            </div>
                        </div>
                    </div>
                </div>
              <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-10 aaa">
                    <h3> Apply For Author:</h3>
                </div>
                <div  class="col-md-2 aaa">
                    <a class="btn btn-primary " href="{{route('applyAuthor')}}">Apply Now</a>
                </div>
                    </div>
                </div>
              </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Total Users
                            </div>

                            <div class="card-body p-0">
                                <div class="p-4">
                                    <canvas id="line-chart" width="100%" height="20"></canvas>
                                </div>

                                <div class="justify-content-around mt-4 p-4 bg-light d-flex border-top d-md-down-none">
                                    <div class="text-center">
                                        <div class="text-muted small">Total Traffic</div>
                                        <div>12,457 Users (40%)</div>
                                    </div>

                                    <div class="text-center">
                                        <div class="text-muted small">Banned Users</div>
                                        <div>95,333 Users (5%)</div>
                                    </div>

                                    <div class="text-center">
                                        <div class="text-muted small">Page Views</div>
                                        <div>957,565 Pages (50%)</div>
                                    </div>

                                    <div class="text-center">
                                        <div class="text-muted small">Total Downloads</div>
                                        <div>957,565 Files (100 TB)</div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            
        </div>
</div>
    
    <!--<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>-->
@endsection