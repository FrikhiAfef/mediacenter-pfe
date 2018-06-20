<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>EMC</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><!--<img alt="image" src="">--><b> INVESTISSEUR</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">




            <!-- User Account: style can be found in dropdown.less -->

            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                       <span class="glyphicon glyphicon-globe">Notifications <span class="badge">
                      {{count(auth()->user()->Notifications)}}</span></span>

                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <!-- User image -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            @foreach(auth()->user()->unreadNotifications as $notification)
                                @include('layouts.notification_',snake_case(class_basename($notification->type)))
                            @endforeach

                        </li>

                    </ul>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <span class="hidden-xs">Investisseur</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="" class="img-circle" alt="User Image">

                            <p>
                           investisseur

                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">

                            <div class="btn btn-default pull-right">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>

                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </nav>
</header>
