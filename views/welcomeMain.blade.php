<!doctype html>

<html lang="en-US">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/gif/png" href="img/icon.png">
    <title>Accounting Management</title>
    <meta name="description" content="Unika - Responsive One Page HTML5 Template">
    <meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio"/>
    <meta name="author" content="imransdesign.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts  -->
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
{{--<link rel="stylesheet" href="css/skin/ice-blue.css">--}}
{{--<link rel="stylesheet" href="css/skin/summer-orange.css">--}}
{{--<link rel="stylesheet" href="css/skin/fresh-lime.css">--}}
{{--<link rel="stylesheet" href="css/skin/night-purple.css"> --}}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-target="#main-navbar">
<div class="page-loader"></div>  <!-- Display loading image while page loads -->
<div class="body">

    <!--========== BEGIN HEADER ==========-->
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
                        <li><a class="page-scroll" href="body"><i class="fa fa-home"></i>  Home</a></li>
                        <li><a class="page-scroll" href="#about-section"><i class="fa fa-diamond"></i> About</a></li>
                        <li><a class="page-scroll" href="#services-section"><i class="fa fa-cogs"></i> Services</a></li>
                        <li><a class="page-scroll" href="#contact-section"><i class="fa fa-paper-plane"></i>  Contact</a></li>
                        @if (Auth::guest())
                            <li><a class="page-scroll" href="#myModal" data-toggle="modal" data-backdrop="static">
                                    <i class="fa fa-sign-in"></i>  Login/Register</a>
                            </li>
                        @else
                            <li><a class="page-scroll" href="{{ url('/home') }}"><i class="fa fa-credit-card"></i> Client Page</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-user"></i>
                                    {{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i>  Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
        <!-- End Navbar -->

    </header>
    <!-- ========= END HEADER =========-->


    <!-- Begin text carousel intro section -->
    <section id="text-carousel-intro-section" class="parallax" data-stellar-background-ratio="0.05"
             style="background-image:url(img/img6_2.jpg);filter: brightness(115%);">
        <div class="container">
            <div class="caption text-center text-white" data-stellar-ratio="0.7">

                <div id="owl-intro-text" class="owl-carousel">
                    <div class="item">
                        <h1>We have Awesome things</h1>
                        <p>Let's make your work simple</p>
                        <div class="extra-space-l"></div>
                    </div>
                    <div class="item">
                        <h1>Join with us</h1>
                        <p>To the greatest Journey</p>
                        <div class="extra-space-l"></div>
                    </div>
                    <div class="item">
                        <h1>We're there to help you out</h1>
                        <p>Single way soltion for Accounting</p>
                        <div class="extra-space-l"></div>
                    </div>
                </div>

            </div> <!-- /.caption -->
        </div> <!-- /.container -->

    </section>
    <!-- End text carousel intro section -->


    <!-- Begin about section -->
    <section id="about-section" class="page bg-style1" style="filter: brightness(95%);">
        <!-- Begin page header-->
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                    <h2>About</h2>
                    <div class="devider"></div>
                    <p class="subtitle">little information</p>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <!-- Begin rotate box-1 -->
        <div class="rotate-box-1-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0">
                            <span class="rotate-box-icon"><i class="fa fa-users"></i></span>
                            <div class="rotate-box-info">
                                <h4>Who We Are?</h4>
                                <p>Online Accounting Management System</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.2s">
                            <span class="rotate-box-icon"><i class="fa fa-diamond"></i></span>
                            <div class="rotate-box-info">
                                <h4>What We Do?</h4>
                                <p>Provide simple way to maintain your accounting</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.4s">
                            <span class="rotate-box-icon"><i class="fa fa-heart"></i></span>
                            <div class="rotate-box-info">
                                <h4>Why We Do It?</h4>
                                <p>Help startups to maintain their accountings easily</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="rotate-box-1 square-icon wow zoomIn" data-wow-delay="0.6s">
                            <span class="rotate-box-icon"><i class="fa fa-clock-o"></i></span>
                            <div class="rotate-box-info">
                                <h4>Since When?</h4>
                                <p>Since last two years we are providing quality services</p>
                            </div>
                        </a>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <!-- End rotate box-1 -->

        <div class="extra-space-l"></div>

        <!-- Begin page header-->

        <!-- End page header-->

        <!-- Begin Our Skills -->
        <!-- End Our Skill -->
    </section>
    <!-- End about section -->


    <section id="services-section" class="page text-center">
        <!-- Begin page header-->
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                    <h2>Services</h2>
                    <div class="devider"></div>
                    <p class="subtitle">what we really know how</p>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <!-- Begin roatet box-2 -->
        <div class="rotate-box-2-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0">
                            <span class="rotate-box-icon"><i class="fa fa-line-chart"></i></span>
                            <div class="rotate-box-info">
                                <h4>Income Statement</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.2s">
                            <span class="rotate-box-icon"><i class="fa fa-pie-chart"></i></span>
                            <div class="rotate-box-info">
                                <h4>Balance Sheet</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.4s">
                            <span class="rotate-box-icon"><i class="fa fa-bar-chart"></i></span>
                            <div class="rotate-box-info">
                                <h4>Trial Balance</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                            <span class="rotate-box-icon"><i class="fa fa-pencil"></i></span>
                            <div class="rotate-box-info">
                                <h4>Journal Entries</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="rotate-box-2 square-icon text-center wow zoomIn" data-wow-delay="0.6s">
                            <span class="rotate-box-icon"><i class="fa fa-calculator"></i></span>
                            <div class="rotate-box-info">
                                <h4>General Ledger</h4>
                            </div>
                        </a>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <!-- End rotate-box-2 -->
    </section>
    <!-- End Services -->

    <!-- Begin testimonials -->
    <section id="testimonial-section">
        <div id="testimonial-trigger" class="testimonial text-white parallax" data-stellar-background-ratio="0.5"
             style="background-image: url(img/testimonial-bg.jpg);">
            <div class="cover"></div>
            <!-- Begin page header-->
            <div class="page-header-wrapper">
                <div class="container">
                    <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                        <h2>Reviews</h2>
                        <div class="devider"></div>
                        <p class="subtitle">What people say about us</p>
                    </div>
                </div>
            </div>
            <!-- End page header-->
            <div class="container">
                <div class="testimonial-inner center-block text-center">
                    <div id="owl-testimonial" class="owl-carousel">
                        <div class="item">
                            <blockquote>
                                <p>"This was my first experience with that team and outperformed my expectation! They
                                    know there stuff and I highly recommend them! A+++".</p>
                                <footer><cite title="Source Title">Daryl Hodgeman</cite></footer>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua."</p>
                                <footer><cite title="Source Title">John Doe</cite></footer>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote>
                                <p>"Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit".</p>
                                <footer><cite title="Source Title">John Doe</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End testimonials -->

    <!-- Begin social section -->
    <section id="social-section">

        <!-- Begin page header-->
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                    <h2>Join Us</h2>
                    <div class="devider"></div>
                    <p class="subtitle">Follow us on social networks</p>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <div class="container-fluid">
            <ul class="social-list">
                <li><a href="https://www.facebook.com/al.mashud.shishir"
                       class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.3s"><span
                                class="rotate-box-icon"><i class="fa fa-facebook"></i></span></a></li>
                <li><a href="https://twitter.com/AlMashudShishir"
                       class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.4s"><span
                                class="rotate-box-icon"><i class="fa fa-twitter"></i></span></a></li>
                <li><a href="https://plus.google.com/110457822131718060043"
                       class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.5s"><span
                                class="rotate-box-icon"><i class="fa fa-google-plus"></i></span></a></li>
                <li><a href="https://www.pinterest.com/AlMashudShishir/"
                       class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.6s"><span
                                class="rotate-box-icon"><i class="fa fa-pinterest-p"></i></span></a></li>
                <li><a href="https://www.linkedin.com/in/al-mashud-shishir-49a41b133"
                       class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.6s"><span
                                class="rotate-box-icon"><i class="fa fa-linkedin"></i></span></a></li>
                <li><a href="https://www.instagram.com/shishir_al_mashud/"
                       class="rotate-box-1 square-icon text-center wow zoomIn" data-wow-delay="0.6s"><span
                                class="rotate-box-icon"><i class="fa fa-instagram"></i></span></a></li>
            </ul>
        </div>

    </section>
    <!-- End social section -->


    <!-- Begin contact section -->
    <section id="contact-section" class="page text-white parallax" data-stellar-background-ratio="0.5"
             style="background-image: url(img/map-bg.jpg);">
        <div class="cover"></div>

        <!-- Begin page header-->
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                    <h2>Contacts</h2>
                    <div class="devider"></div>
                    <p class="subtitle">All to contact us</p>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <div class="contact wow bounceInRight" data-wow-delay="0.4s">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="contact-info">
                            <h4>Our Address</h4>
                            <ul class="contact-address">
                                <li><i class="fa fa-map-marker fa-lg"></i>&nbsp;United International University,<br><br>&nbsp;House
                                    - 80, Road - 8/A,
                                    Satmasjid Road,,<br><br>Dhanmondi, Dhaka-1209,
                                    Bangladesh.
                                </li>
                                <li><i class="fa fa-envelope"></i>almashud137@gmail.com</li>
                                <li><i class="fa fa-phone"></i>01932379937</li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="contact-form">
                            <h4>Write to us</h4>
                            <form class="form" role="form" method="POST" action="{{ url('/') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input placeholder="Email" id="email" type="email" class="form-control input-lg"
                                           name="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">

                                    <textarea class="form-control input-lg" rows="5" placeholder="Message" required
                                              name="comment"></textarea>
                                </div>
                                <button type="submit" id="cmntbtn" class="btn wow bounceInRight" data-wow-delay="0.8s">Send Message
                                </button>

                            </form>
                        </div>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
    </section>
    <!-- End contact section -->


    <!-- Begin footer -->
    <footer class="text-off-white">
        <div class="footer">
            <div class="container text-center wow fadeIn" data-wow-delay="0.4s">
                <p class="copyright">Copyright &copy; 2016 - Designed By &amp; Developed by
                    <a href="https://twitter.com/AlMashudShishir" class="theme-author">Al Mashud</a></p>
            </div>
        </div>

    </footer>
    <!-- End footer -->

    <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a> <!-- Scroll to top button -->

</div><!-- body ends -->


<!-- Plugins JS -->
<script src="inc/jquery/jquery-1.11.1.min.js"></script>
<script src="inc/bootstrap/js/bootstrap.min.js"></script>
<script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
<script src="inc/stellar/js/jquery.stellar.min.js"></script>
<script src="inc/animations/js/wow.min.js"></script>
<script src="inc/waypoints.min.js"></script>
<script src="inc/isotope.pkgd.min.js"></script>
<script src="inc/classie.js"></script>
<script src="inc/jquery.easing.min.js"></script>
<script src="inc/jquery.counterup.min.js"></script>
<script src="inc/smoothscroll.js"></script>

<!-- Theme JS -->
<script src="js/theme.js"></script>
<script>
    $( document ).ready(function() {
            @if(isset($message)&&$message=='1')
                    $message='0';
            $("#msgModal").modal("show");

        @endif
    });
</script>
<div class="modal fade" id="myModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login/Register</h4>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#LoginContent">Login</a></li>
                    <li><a data-toggle="tab" href="#RegisterContent">Register</a></li>
                </ul>
                <div class="tab-content">
                    @include('partials._mainLoginContent')
                    @include('partials._mainRegisterContent')
                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="msgModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Response</h4>
            </div>
            <div class="modal-body">
                Message Received Successfully
            </div>
        </div>

    </div>
</div>
</body>


</html>
