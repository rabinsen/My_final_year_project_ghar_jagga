<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- Font awesome -->

    <style>
        #map-canvas{
            width: 350px;
            height: 250px;
        }
    </style>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
            type="text/javascript"></script>


    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nouislider.css') }}">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main style sheet -->
    {{--For subscription--}}
    <link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link href="{{ asset('css/ratings.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rating.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('jqueryui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('jqueryui/jquery-ui.theme.min.css') }}" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="{{ asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
        <script src="{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>

    <!-- Bootstrap Core CSS -->
    {{--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}


    <!-- Custom CSS -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/styles5.css') }}" rel="stylesheet">--}}
    <script src="{{ asset('https://use.fontawesome.com/a42027ae6c.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
{{--@include('includes.menu')--}}
<section id="aa-menu-area1">
    <nav class="navbar navbar-inverse main-navbar1 navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <!-- Text based logo -->
                <a href="#menu-toggle" class="btn btn-default fa fa-list rabins" id="menu-toggle"></a>
                <a class="navbar-brand aa-logo" href="{{ url('/') }}"> Home <span>Property</span></a>
                <!-- Image based logo -->
                <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul id="top-menu" class="nav navbar-nav navbar-left aa-main-nav">
                    <li><a href="{{ route('properties.index') }}">BUY</a></li>


                    <li><a href="{{ route('create') }}">SELL</a></li>
                    {{--<li><a href="404.html">404 PAGE</a></li>--}}
                </ul>
                <div class="nav navbar-nav navbar-right">

                    @if (Auth::guest())
                        <a href="{{ url('/register') }}" class="aa-register">Register | </a>
                        <a href="{{ url('/login') }}" class="aa-login">Login</a>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" style="position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}"
                                     style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/Dashboard') }}"><i class="fa fa-btn fa-user"></i> Dashboard</a>
                                </li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                    @endif

                </div>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
</section>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        @if(\Illuminate\Support\Facades\Auth::user()->type === 0)
            <ul class="sidebar-nav">
                <li>
                    <p class="centered"><a href="{{ route('profile') }}"><img src=" /uploads/avatars/{{ Auth::user()->avatar }}"
                                                         class="img-circle" width="80"></a></p>
                    <h5 class="centered textColor">{{ Auth::user()->name }}</h5>
                    {{--<div class="centered">--}}
                    {{--<a href="#"><button class="btn btn-default">Change Pic</button></a>--}}
                    {{--</div>--}}
                </li>
                <li class="sidebar-brand">

                    <a href="{{ url('/Dashboard') }}">
                        {{ \Illuminate\Support\Facades\Auth::user()->name }} Dashboard
                    </a>

                </li>

                <li>
                    <a href="{{ route('profileInfo') }}" type="hidden"></a>
                </li>

                <li>
                    <a href="{{ route('showProfile') }}"> View Profile</a>
                </li>

                <li>
                    <a href="{{ route('create') }}">Add new Property</a>
                </li>
                <li>
                    <a href="{{ route('userProperties') }}">View Previous Property</a>
                </li>
                <li>
                    <a href="{{ route('userPropertyReviews') }}">Reviews on My Adds</a>
                </li>
                @if(!$user->subscribed('main'))
                <li>

                    <a href="{{ route('subscription') }}">Become Agent</a>
                </li>
                    @endif
            </ul>
        @endif

        @if(\Illuminate\Support\Facades\Auth::user()->type === 1)
            <ul class="sidebar-nav">
                <li>
                    <p class="centered"><a href="{{ route('profile') }}"><img src=" /uploads/avatars/{{ Auth::user()->avatar }}"
                                                         class="img-circle" width="80"></a></p>
                    <h5 class="centered textColor">{{ Auth::user()->name }}</h5>
                    {{--<div class="centered">--}}
                    {{--<a href="#"><button class="btn btn-default">Change Pic</button></a>--}}
                    {{--</div>--}}
                </li>
                <li class="sidebar-brand">
                    <a href="{{ url('/Dashboard') }}">
                        Admin Dashboard
                    </a>
                <li>
                    <a href="{{ route('userDetails') }}">Manage User</a>
                </li>
                <li>
                    <a href="{{ route('manageProperty') }}">Manage Property</a>
                </li>
            </ul>
        @endif
    </div>


    @yield('content')
</div>

<!-- /#wrapper -->
{{--@include('includes.footer2')--}}
@yield('script')
@include('includes.footer')


</body>

</html>
