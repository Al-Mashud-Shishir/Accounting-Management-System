@extends('layouts.base')
@section('title','Admin')
@section('ExtraCss')
    @include('partials._clientBASE')
@endsection
@section('content')

    <div id="background-carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image:url(img/img1.jpg)"></div>
                <div class="item" style="background-image:url(img/img2.jpg)"></div>
                <div class="item" style="background-image:url(img/img4.jpg)"></div>
            </div>
        </div>
    </div>

    <div id="content-wrapper">
        @include('partials._adminLogin')
        @if(isset($message)&&$message=='0')

            <div class="alert alert-danger" style="z-index:1 !important;margin-top: 30px">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sorry!</strong> Wrong email or password.
            </div>
        @endif
    </div>

@endsection
