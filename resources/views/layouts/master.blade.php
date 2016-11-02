<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Property | Home</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

        <!-- Font awesome -->


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
        <![endif]-->
    </head>

    <body>
    {{--@include('includes.header')--}}
    @include('includes.menu')

    @yield('content');
    @include('includes.footer2')
    @include('includes.footer')

    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->


    </body>
</html>