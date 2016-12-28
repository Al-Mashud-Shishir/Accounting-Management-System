@extends('layouts.app')
@section('title','Trial Balance')

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
    <div id="content-wrapper2">
        <div class="row">
            <div class="col-sm-3  {{isset($selected)?"":"bounceIn"}}">
                <div class="sidebar-nav">
                    <div class="well bg-inverse ">
                        <form role="form" method="POST" action="{{ url('/Trial') }}">
                            {{ csrf_field() }}
                            <ul class="nav nav-list">
                                <li class="nav-header date_header" style=""> Pick Ur Date</li>
                                <hr>
                                <li class="date_header"><i class="fa fa-calendar"></i> Start Date</li>
                                <li><input id="startdate" type="date" name="startdate" class="form-control date_picker"
                                           value="{{ old('startdate') }}" required autofocus></li>
                                <hr>
                                <li class="date_header"><i class="fa fa-calendar"></i>  End Date </li>
                                <input id="enddate" type="date" name="enddate"class="form-control date_picker"
                                       value="{{ old('enddate') }}" required autofocus>
                                <hr>
                            </ul>
                            <button type="submit" class="btn center-block" id="submit">Show Result
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 col-sm-offset-1 bounceIn">
                <div class="result">
                    @if(isset($selected))
                        @include('Partials._trialBalance',['trial'=>$trial])
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

