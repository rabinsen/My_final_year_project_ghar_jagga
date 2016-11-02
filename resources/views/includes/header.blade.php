<header id="aa-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-header-area">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            {{--<div class="aa-header-left">--}}
                                {{--<div class="aa-telephone-no">--}}
                                    {{--<span class="fa fa-phone"></span>--}}
                                    {{--1-900-523-3564--}}
                                {{--</div>--}}
                                {{--<div class="aa-email hidden-xs">--}}
                                    {{--<span class="fa fa-envelope-o"></span> info@markups.com--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="aa-header-right">
                                {{--<a href="{{ route('register') }}" class="aa-register">Register</a>--}}
                                {{--<a href="{{ url('/login') }}" class="aa-login">Login</a>--}}
                                @if (Auth::guest())
                                    <a href="{{ url('/register') }}" class="aa-register">Register</a>
                                   <a href="{{ url('/login') }}" class="aa-login">Login</a>

                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>