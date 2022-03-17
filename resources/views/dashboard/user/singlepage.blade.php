@extends('layouts.app')
@section('content')
<header style="background-image: url('../img/bg2.jpeg'); height: 200px;">
    <div class="header-bg">
        <div class="head text-align" style="padding-top: 8rem;">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">
                Home 
                <i class="fa fa-chevron-right"></i></a></span> <span>
                    Course Lists
                <i class="fa fa-chevron-right"></i></span>
            </p>
            <h2> Course Lists </h2>
        </div>
    </div>  
</header>

<section class="pick-course">
    <div class="container">
            <div class="courses">
                <div class="course text-align">
                    <div class="picture" style="background-image: url('../img/course1.jpeg');"></div>
                    <h5> {{ $courses->name_course }}  </h5>
                    <p> Teacher TONY GARRETT </p>
                    <div class="line"></div>
                    <span>{{ $courses->houre_course }}                               {{ $courses->price_course }}$ </span>
                </div>
            </div>
    </div>
</section>
@endsection