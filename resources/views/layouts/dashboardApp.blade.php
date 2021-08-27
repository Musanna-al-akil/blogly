<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','blogly')</title>
    <link rel="shortcut icon" href="{{asset('admin/assert/imgs/avatar-1.png')}}" type="image/x-icon" />
    
    <link rel="stylesheet" href="{{asset('admin/assert/vendor/simple-line-icons/css/simple-line-icons.css')}}">
<link rel="stylesheet" href="{{asset('admin/assert/vendor/font-awesome/css/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/assert/css/styles.css')}}">
@yield('css')
</head>
<body class="sidebar-fixed header-fixed">
<div class="page-wrapper">
    
    @include('inc.dash.HeaderNav')
    <div class="main-container">
        @include('inc.dash.sideNav')

      @yield('content')
    </div>
</div>
<script src="{{asset('admin/assert/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assert/vendor/popper.js/popper.min.js')}}"></script>
<script src="{{asset('admin/assert/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assert/js/carbon.js')}}"></script>
<script src="{{asset('admin/assert/vendor/chart.js/chart.min.js')}}"></script>

<script src="{{asset('admin/assert/js/demo.js')}}"></script>
@yield('jsd')

</body>
</html>
