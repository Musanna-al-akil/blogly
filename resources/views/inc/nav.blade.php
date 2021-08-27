<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <nav class="navbar navbar-expand-lg sticky navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    BeBlogly
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
              <a class="nav-link {{Route::currentRouteName()=='home' ? 'active':''}}" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::currentRouteName()=='dev' ? 'active':''}}" href="{{route('dev')}}">Dev</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::currentRouteName()=='tech' ? 'active':''}}" href="{{route('tech')}}">Tech</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::currentRouteName()=='game' ? 'active':''}}" href="{{route('game')}}">Game</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Route::currentRouteName()=='food' ? 'active':''}}" href="{{route('food')}}">Food</a>
            </li>
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  id="dropdown08" data-toggle="dropdown" >More</a>
        <div class="dropdown-menu" aria-labelledby="dropdown08">
          <a class="dropdown-item {{Route::currentRouteName()=='contact' ? 'active':''}}" href="{{route('contact')}}">Contact</a>
          <a class="dropdown-item {{Route::currentRouteName()=='privacy' ? 'active':''}}" href="{{route('privacy')}}">Privacy</a>
          <a class="dropdown-item {{Route::currentRouteName()=='about' ? 'active':''}}" href="{{route('about')}}">About us</a>
        </div>
      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

       <form class="form-inline mt-2 mt-md-0">
            
                        <li class="nav-item ">
          <div class="aa-input-container" id="aa-input-container">
    <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search for posts" name="search" autocomplete="off" />
    <i class="aa-input-icon fa fa-search" ></i>
</div>
      </li>
      
        </form>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('dashboard') }}" }}>Dashbord
                                    </a>
                                
                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>