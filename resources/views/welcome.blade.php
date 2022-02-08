@extends('layouts.app')
@section('content')
<header>
    <div class="header">
        <div class="head text-align">
            <h1> ​Education and Online Course Site </h1>
            <h5> ​Our c​ourses </h5>
            <div class="buttons d-flex">
                <div class="button"> <a href="#" > Course </a> </div>
                <div class="button"> <a href="#" > Course </a> </div>
                <div class="button"> <a href="#" > Course </a> </div>
                <div class="button"> <a href="#" > Course </a> </div>
            </div>
        </div>
    </div>  
</header>
<section class="pick-course">
    <div class="container">
        <h4 class="text-align"> ​START LEARNING TODAY </h4>
        <h1> Pick Your Course </h1>
        <div class="courses">
            <div class="course text-align">
                <div class="picture" style="background-image: url('../img/course1.jpeg');"></div>
                <h5> ​Course name </h5>
                <p> Teacher TONY GARRETT </p>
                <div class="line"></div>
                <span> ​$199                               2300 </span>
            </div>
            <div class="course text-align">
                <div class="picture" style="background-image: url('../img/course1.jpeg');"></div>
                <h5> ​Course name </h5>
                <p> Teacher TONY GARRETT </p>
                <div class="line"></div>
                <span> ​$199                               2300 </span>
            </div>
            <div class="course text-align">
                <div class="picture" style="background-image: url('../img/course1.jpeg');"></div>
                <h5> ​Course name </h5>
                <p> Teacher TONY GARRETT </p>
                <div class="line"></div>
                <span> ​$199                               2300 </span>
            </div>
            <div class="course text-align">
                <div class="picture" style="background-image: url('../img/course1.jpeg');"></div>
                <h5> ​Course name </h5>
                <p> Teacher TONY GARRETT </p>
                <div class="line"></div>
                <span> ​$199                               2300 </span>
            </div>
        </div>
    </div>
</section>
<header class="info">
    <div class="info-bg">
        <div class="container">
            <div class="row">
                <div class="in"> 
                    <div class="col d-flex text-align">
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="400">400</strong>
                            <span>Online Courses</span>
                        </div>
                    </div>
                </div>
                <div class="in"> 
                    <div class="col d-flex text-align">
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="400">400</strong>
                            <span>Online Courses</span>
                        </div>
                    </div>
                </div>
                <div class="in"> 
                    <div class="col d-flex text-align">
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="400">400</strong>
                            <span>Online Courses</span>
                        </div>
                    </div>
                </div>
                <div class="in"> 
                    <div class="col d-flex text-align">
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="400">400</strong>
                            <span>Online Courses</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</header>
<section class="services">
    <div class="container">
        <div class="row">
            <div class="col">
               {{-- <img src="../img/tg-min.jpg" alt="" style="width: 20em; height: 28em;">  --}}
               <div class="image" style="background-image: url('../img/tg-min.jpg');"></div>
            </div>
            <div class="col">
               <div class="image" style="background-image: url('../img/dddhre-min.jpg');"></div>
             </div>
             <div class="col">
               <div class="image" style="background-image: url('../img/rtt.jpg');"></div>
             </div>
        </div>
        <div class="row-sec">
            <div class="col-sec text-align">
                <div class="d-flex"> <i class="far fa-lightbulb"></i> </div>
                <h5> ​How We Teach </h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
                    cillum dolore eu fugiat nulla pariatur</p>   
                <span> <a href="#"> More </a> </span>         
            </div>
            <div class="col-sec text-align">
                <div class="d-flex"><i class="fas fa-medal"></i></div>
                <h5> Results </h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
                    cillum dolore eu fugiat nulla pariatur</p>   
                <span> <a href="#"> More </a> </span>                      
            </div>
             <div class="col-sec text-align">
                <div class="d-flex"><i class="fas fa-question-circle"></i></div>
                <h5> Support </h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse 
                    cillum dolore eu fugiat nulla pariatur</p>   
                <span> <a href="#"> More </a> </span>                       
            </div>
        </div>
        
    </div>
</section>

<section class="testimony-section">
    <div class="overlay" style="background-image: url('../img/bg_2.jpg');"></div>
    <div class="container">
        <h6 class="subheading text-align">Testimonial</h6>
        <h2>What Are Students Says</h2>
            <div class="item d-flex">
                <div class="testimony-wrap">
                    <div class="text">
                        <p class="star">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(../img/person_2.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Roger Scott</p>
                            <span class="position">Marketing Manager</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="testimony-wrap">
                    <div class="text">
                        <p class="star">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(../img/person_2.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Roger Scott</p>
                            <span class="position">Marketing Manager</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="testimony-wrap">
                    <div class="text">
                        <p class="star">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(../img/person_2.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Roger Scott</p>
                            <span class="position">Marketing Manager</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="testimony-wrap">
                    <div class="text">
                        <p class="star">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(../img/person_2.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Roger Scott</p>
                            <span class="position">Marketing Manager</span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
 </section>
@endsection
{{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('user.login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('user.login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('user.register'))
                    <a href="{{ route('user.register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

</div> --}}