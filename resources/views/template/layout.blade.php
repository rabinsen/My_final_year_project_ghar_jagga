
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/a42027ae6c.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <span>GharJaga</span>
      </a>
      <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
  <li role="presentation" class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     <span class="glyphicon glyphicon-user" ></span>&nbsp;  User <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
    <li><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;profile</a></li>
    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Setting</a></li>
    <li><a href="#"><span class="glyphicon glyphicon-user" >&nbsp;Link</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#"> <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a></li>
    </ul>
  </li>
</ul>
  </div>
</nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li>
                    <a href="{{route('update')}}">Update Profile Info</a>
                </li>
                <li>
                    <a href="#">Add new Property</a>
                </li>
                <li>
                    <a href="#">View Prvious Property</a>
                </li>
                 <li>
                    <a href="#">Manage User</a>
                </li>
                 <li>
                    <a href="#">Manage Property</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        @yield('content')
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
