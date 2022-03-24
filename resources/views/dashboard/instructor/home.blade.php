@extends('layouts.app')
@section('title')
 Arabia : Profile 
@endsection
@section('content')
<header style="background-image: url('../img/bg2.jpeg'); height: 200px;">
    <div class="header-bg">
        <div class="head text-align" style="padding-top: 8rem;">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">
                Home 
                <i class="fa fa-chevron-right"></i></a></span> <span>
                Dashboard Instructor
                <i class="fa fa-chevron-right"></i></span>
            </p>
            <h2> Dashboard Instructor</h2>
        </div>
    </div>  
</header>
<section class="form-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <form class="md-float-material form-material">
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-center"><i class="fa fa-users text-primary f-56"></i></h3>
                                    <h3 class="text-center contact-us">Add information for your students</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-primary"> <input type="text" name="instructor_name" 
                                        class="form-control text-left" placeholder="Instructor Name" required=""> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-primary"> <input type="text" name="Houre_of_lesson" 
                                        class="form-control text-left" placeholder="Houre of lesson" required=""> </div>
                                </div>
                            </div>
                            <div class="form-group form-primary"> <input type="text" name="Link" 
                                class="form-control text-left" placeholder="Link Zoom" required=""> </div>
                            <div class="form-group form-primary"> <input type="text" name="Houre_of_lesson" 
                                class="form-control text-left" placeholder="Hour of lesson" required=""> </div>
                            <div class="form-group form-primary"> <input type="text" name="Arabic_Level" 
                                class="form-control text-left" placeholder="Arabic_Level" required=""> </div>
                            <div class="form-group form-primary"> <input type="text" name="days" 
                                class="form-control text-left" placeholder="days" required=""> </div>
                            <div class="form-group form-primary"> <input type="text" name="user_id" 
                                class="form-control text-left" placeholder="user id" required=""> </div>
                            <div class="form-group form-primary"> <input type="text" name="course_id" 
                                class="form-control text-left" placeholder="course id" required=""> </div>
                                
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                         Send </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection