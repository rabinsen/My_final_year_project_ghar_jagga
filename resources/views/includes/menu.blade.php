<section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- Text based logo -->
                <a class="navbar-brand aa-logo" href="{{ url('/') }}"> Home <span>Property</span></a>
                <!-- Image based logo -->
                <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-left aa-main-nav">
                    <li><a href="{{ route('properties.index') }}">BUY</a></li>


                    <li><a href="{{ url('/login') }}">SELL</a></li>
                    {{--<li><a href="{{ route('agents') }}">FIND AGENTS</a></li>--}}
                    {{--<li><a href="404.html">404 PAGE</a></li>--}}
                </ul>
                <div class="nav navbar-nav navbar-right">

                        @if (Auth::guest())
                            <a href="{{ url('/register') }}" class="aa-register">Register    |    </a>
                            <a href="{{ url('/login') }}" class="aa-login">Login</a>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/Dashboard') }}"><i class="fa fa-btn fa-user"></i>  Dashboard</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>  Logout</a></li>
                            </ul>
                        </li>
                        @endif

                </div>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</section>