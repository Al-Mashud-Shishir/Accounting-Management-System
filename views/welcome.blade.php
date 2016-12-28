<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('/css/welcome.css')}}">
    <title>Starter Template for Bootstrap</title>
</head>

<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Account Management System</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Admin</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
<div class="well ">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ asset('/images/img6.jpg') }}" class="img-rounded" alt="Chania">
                <div class="carousel-caption"><h3>Accounting Manageme System</h3>
                <p>Get The Best Service At A Cheap Price</p></div>
            </div>
            <div class="item">
                <img src="{{ asset('/images/img5.jpg') }}" class="img-rounded" alt="Chania">
                <div class="carousel-caption"><h3>Accounting Manageme System</h3>
                    <p>Best Choice For Start-Ups</p></div>
            </div>
            <div class="item">
                <img src="{{ asset('/images/img4.jpg') }}" class="img-rounded" alt="Flower">
                <div class="carousel-caption"><h3>Accounting Manageme System</h3>
                    <p>Click & Register And Maintain Your Accounts By Yourself</p></div>
            </div>
        </div>
    </div>
</div>
<div class="row about-us">
    <div class="col-sm-6">
        <h3 class="text-center">Our Services</h3>
        <hr>
        <ul>
            <li>Income Statement</li>
            <li>Balance Sheet</li>
            <li>Journal Entries</li>
            <li>Trial Balance</li>
            <li>General Ledger</li>
        </ul>
    </div>
    <div class="col-sm-6">
        <h3 class="text-center">About Us</h3>
        <hr>
        <p class="text-lg-center">
            We Are A Online Accounting Management Company,which aims the <b>Start UP</b>
            Companies for helping them by providing necessary accounting management required
            for them.
        </p>
    </div>
</div>
<div class="row well">

    <div class="col-sm-6 pull-right">
        <h3 class="text-center">Contact Us</h3>
        <hr>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address :</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="comment" class="col-md-4 control-label">Comment :</label>
                <div class="col-md-6">
                    <textarea class="form-control" rows="5"  name="comment"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class=" col-sm-10 col-sm-offset-2 ">
                    <button type="submit" class="btn btn-primary center-block ">Send Message</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-4 col-sm-offset-1">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2766675369985!2d90.39238421452391!3d23.737511484595718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8eabd8931e1%3A0x65b3d31b26bf2e5!2sBangladesh+National+Museum!5e0!3m2!1sen!2sbd!4v1482123192065"
                width="400" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
</div>
<div class="footer text-center">
    <hr>
    <h4>All Rights Reserved AccountManagementSystem : 2016</h4>
</div>
</body>
</html>
