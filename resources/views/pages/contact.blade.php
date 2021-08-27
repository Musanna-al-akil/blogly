@extends('layouts.app')
@section('title')
Contact Us
@endsection

@section('css')
<style type="text/css">
	
.aaa{
	color: #281d7be3!important;
}
.first{
	background-color: #f16334;
	padding: 50px 0;
}
.a_{
	color: white;
    
}
#a_{
    font-size: 30px;
}
.btn-orange{
	background-color: #f16334;
}
.containerl{
	padding: 0 100px;
}
@media (max-width: 500px) {
  .containerl {
    padding: 0 40px;
  }
}

</style>
@endsection
@section('content')
<br>
<br>
<div class="container">
	<h1 class="text-center aaa">How can I help you?</h1>
	<br>
	<p class="text-center aaa">Do you have a question ? Just fill out the form fields below.</p>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                       <h3>Contact Form</h3>
                    </div>

             

                @if(Session::has('success'))
                    <div class="alert alert-primary">{{Session::get('success')}}</div>
                        @endif

                        @if($errors->any())
                        <div >
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <form method="POST" action="{{route('contactSubmit')}}" >
                    @csrf

                    <div class="card-body">
                    	<div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label"><h5>Title:</h5></label>
                                        <input id="normal-input" class="form-control"  name="title" placeholder="Enter Title">
                                    </div>
                                </div> 
                                
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
                                <div class="form-group">
                                    <label for="normal-input" class="form-control-label"><h5>Name:</h5></label>
                                    <input id="normal-input" class="form-control" type="text" name="name" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="normal-input" class="form-control-label"><h5>Email Address:</h5></label>
                                    <input id="normal-input" class="form-control" type="email" name="email" placeholder="Enter Your Email Address">
                                </div>
                            </div>
                        </div>
                        

                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="placeholder-input" class="form-control-label"><h5>Content:</h5></label>
                                    <textarea class="form-control" cols="20" name="content" id="editor" placeholder="Write Here"  rows="5"></textarea>
                                </div>
                            </div>
                        </div>

                        
                        <button class="btn btn-orange a_" type="submit">Submit</button>
                    </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <br>
        <br>



</div>
<div class="first">
	<div class="container  ">
		<h2 class="text-center a_">Or connect with me on…</h2>  
		<p class="text-center a_" id="a_"><b>______</b></p>
		<br>
		<br>
		<div class="containerl">
		<h5 class="a_">Email</h4><i class="fab fa-gmail"></i ><p class="a_">startuply@musannaal.com</p>
		<h5 class="a_">Phone</h4><i class="fab fa-gmail"></i ><p class="a_">018545464645</p>
		<h5 class="a_">Facebook</h4><i class="fab fa-gmail"></i ><p class="a_">startuply@musannaal.com</p>
		<h5 class="a_">Instagram</h4><i class="fab fa-gmail"></i ><p class="a_">startuply@musannaal.com</p>
		</div>
	</div>
</div>


@endsection
