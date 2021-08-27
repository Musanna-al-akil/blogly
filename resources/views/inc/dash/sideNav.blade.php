<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">User Dashboard</li>

            <li class="nav-item">
            <a href="{{route('userDashboard')}}" class="nav-link {{Route::currentRouteName()=='userDashboard' ? 'active':''}}">
                    <i class="icon icon-speedometer"></i> Dashboard
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a href="{{route('userComments')}}" class="nav-link {{Route::currentRouteName()=='userComments' ? 'active':''}} ">
                    <i class="icon icon-book-open"></i> Comments     </a>
           </li>
<!--
            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="icon icon-energy"></i> UI Kits <i class="fa fa-caret-left"></i>
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="alerts.html" class="nav-link">
                            <i class="icon icon-energy"></i> Alerts
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="buttons.html" class="nav-link">
                            <i class="icon icon-energy"></i> Buttons
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="cards.html" class="nav-link">
                            <i class="icon icon-energy"></i> Cards
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="modals.html" class="nav-link">
                            <i class="icon icon-energy"></i> Modals
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="tabs.html" class="nav-link">
                            <i class="icon icon-energy"></i> Tabs
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="progress-bars.html" class="nav-link">
                            <i class="icon icon-energy"></i> Progress Bars
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="widgets.html" class="nav-link">
                            <i class="icon icon-energy"></i> Widgets
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="icon icon-graph"></i> Charts <i class="fa fa-caret-left"></i>
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="chartjs.html" class="nav-link">
                            <i class="icon icon-graph"></i> Chart.js
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="forms.html" class="nav-link">
                    <i class="icon icon-puzzle"></i> Forms
                </a>
            </li>
            <li class="nav-item">
                <a href="tables.html" class="nav-link">
                    <i class="icon icon-grid"></i> Tables
                </a>
            </li>

        -->
        @if(Auth::user()->author==true)

            <li class="nav-title">Author</li>

            <li class="nav-item nav-dropdown">
                <a href="{{route('authorDashboard')}}" class="nav-link {{Route::currentRouteName()=='authorDashboard' ? 'active':''}}">
                    <i class="icon icon-speedometer"></i> Dashboards
                </a>
            </li>
             <li class="nav-item nav-dropdown">
                <a href="{{route('authorPosts')}}" class="nav-link {{Route::currentRouteName()=='authorPosts' ? 'active':''}}">
                    <i class="icon icon-paper-clip"></i> posts
                 </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="{{route('authorComments')}}" class="nav-link {{Route::currentRouteName()=='authorComments' ? 'active':''}}">
                    <i class="icon icon-book-open"></i> comments 
                </a>
            </li>
                @endif
                @if(Auth::user()->admin==true)  
            <li class="nav-title">Admin</li>

            <li class="nav-item nav-dropdown">
                <a href="{{route('AdminDashboard')}}" class="nav-link {{Route::currentRouteName()=='AdminDashboard' ? 'active':''}}">
                    <i class="icon icon-speedometer"></i> Dashboards
                </a>
            </li>
             <li class="nav-item nav-dropdown">
                <a href="{{route('AdminPosts')}}" class="nav-link {{Route::currentRouteName()=='AdminPosts' ? 'active':''}}">
                    <i class="icon icon-paper-clip"></i> posts
                 </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="{{route('AdminComments')}}" class="nav-link {{Route::currentRouteName()=='AdminComments' ? 'active':''}}">
                    <i class="icon icon-book-open"></i> comments 
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="{{route('AdminUsers')}}" class="nav-link {{Route::currentRouteName()=='AdminUsers' ? 'active':''}}">
                    <i class="icon icon-user"></i> Admin
                </a>
            </li>
           
            @endif  
            </li>

        </ul>
    </nav>
</div>