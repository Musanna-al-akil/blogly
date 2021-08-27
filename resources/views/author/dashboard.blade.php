@extends('layouts.dashboardApp')

@section('title') author|dashboard @endsection

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{Auth::user()->postsToday->count()}}</span>
                                <span class="font-weight-light">Posts Today</span>
                            </div>
    
                            <div class="h2 text-muted">
                                <i class="icon icon-paper-clip"></i>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{Auth::user()->posts->count()}}</span>
                                <span class="font-weight-light">Posts All Time</span>
                            </div>
    
                            <div class="h2 text-muted">
                                <i class="icon icon-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{$todayComments}}</span>
                                <span class="font-weight-light">Comments Tody</span>
                            </div>
    
                            <div class="h2 text-muted">
                                <i class="icon icon-cloud-download"></i>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{$allComments->count()}}</span>
                                <span class="font-weight-light">Comments All Time</span>
                            </div>
    
                            <div class="h2 text-muted">
                                <i class="icon icon-book-open"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row ">
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
    

@endsection