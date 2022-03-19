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
        <h2 style="text-align: left">{{ $courses->name_course }}</h2>
        <div class="row">
          <div class="col-md-6">
            <img class="img-fluid" src="/storage/{{ $courses->image_course }}" alt="Course image" style="width: 550px; height:550px">
          </div>
      
          <div class="col-md-6">
            <h3 class="my-3">Course Description</h3>
            <p>{{ $courses->desc_course }}</p>
            <h3 class="my-3">Course Details</h3>
              <p> Course hours: {{ $courses->houre_course }} houre</p>
              <p> Course price: {{ $courses->price_course }}$</p>
              <p class="btn-holder"><a href="{{ route('user.addtocart', $courses->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
          </div>  
        </div>
    </div>
</section>
@endsection