<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/gif/png" href="img/icon.png">
    <title>@yield('title')</title>


    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <!-- Navbar font -->
    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="inc/animations/css/animate.min.css">
    <link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
    <link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skin/cool-gray.css">
{{--<link rel="stylesheet" href="css/skin/summer-orange.css">--}}

<!-- Scripts -->
    <script>
        window.Laravel =<?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>

<div id="app">
    <header id="header" class="header-main">

        <!-- Begin Navbar -->
        <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="{{ url('/') }}"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="{{ url('/home') }}"><i class="fa fa-edit"></i> Input New
                                Transaction</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <i class="fa fa-line-chart"></i>
                                Features<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="page-scroll" href="{{ url('/Income') }}">Income Statement</a></li>
                                <li><a class="page-scroll" href="{{ url('/General') }}">General Ledger</a></li>
                                <li><a class="page-scroll" href="{{ url('/Balance') }}">Balance Sheet</a></li>
                                <li><a class="page-scroll" href="{{ url('/Trial') }}">Trial Balance</a></li>
                                <li><a class="page-scroll" href="{{ url('/Journal') }}">Journal Entries</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <i class="fa fa-user"></i> {{ Auth::user()->name }}<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>   Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
        <!-- End Navbar -->

    </header>
    <!-- ========= END HEADER =========-->
@yield('content')
<!-- Begin footer -->

</div>
<div class="copyright">
        <div class="text-center" data-wow-delay="0.4s">
            <p class="copyright">Copyright &copy; 2016 - Designed By &amp; Developed by
                <a href="https://twitter.com/AlMashudShishir">Al Mashud</a></p>
        </div>
</div>

<!-- Scripts -->

@yield('ExtraCss')

<script src="/js/app.js"></script>
</body>
</html>
