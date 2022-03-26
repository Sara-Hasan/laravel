@extends('layouts.app')
@section('title')
 Arabia 
@endsection
@section('content')
<header>
    <div class="header">
        <div class="head text-align">
            <h1> Arabic Language Education Website </h1>
            <div class="buttons d-flex">
            <div class="button"> <a href="{{ route('user.register') }}" > Sign Up Now </a> </div>
            </div>
            {{-- <h5> ​Our c​ourses </h5>
            <div class="buttons d-flex">
                <div class="button"> <a href="#" > MODERN STANDARD ARABIC </a> </div>
                <div class="button"> <a href="#" > CLASSICAL ARABIC </a> </div>
                <div class="button"> <a href="#" > LEVANTINE DIALECT (AMMIYA) </a> </div>
                <div class="button"> <a href="#" > DIPLOMAT, CORPORATE AND PRIVATE STUDIES </a> </div>
            </div> --}}
        </div>
    </div>  
</header>
<section class="pick-course">
    <div class="container">
        <h4 class="text-align"> ​START LEARNING TODAY </h4>
        <h1> Pick Your Course </h1>
        <div class="courses">
            <div class="course text-align">
                <div class="picture" style="background-image: url('../img/arabic-letters-qonline-400x250.jpg');"></div>
                <h5>Modern standard Arabic </h5>
                <div class="line"></div>
                <span> ​$300                              50 </span>
            </div> 
            <div class="course text-align">
                <div class="picture" style="background-image: url('../img/Learning_Arabic_calligraphy.jpg');"></div>
                <h5> Classical Arabic Program</h5>
                <div class="line"></div>
                <span> ​$200                             50 </span>
            </div> 
            <div class="course text-align">
                <div class="picture" style="background-image: url('../img/tenforms-qonline-400x250.jpg');"></div>
                <h5>Levantine Dialect (AMMIYA)</h5>
                <div class="line"></div>
                <span> ​$200                              50 </span>
            </div> 
            <div class="course text-align">
                <div class="picture" style="background-image: url('../img/course1.jpeg');"></div>
                <h5>Corporate Private Studies </h5>
                <div class="line"></div>
                <span> ​$300                              100 </span>
            </div> 
        </div>
    </div>
    
</section>
{{-- <header class="info">
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
</header> --}}
<section class="services">
    <div class="container">
        <div class="gh">
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
             <div class="col">
                <div class="image" style="background-image: url('../img/tttt.jpg');"></div>
              </div>
        </div>
        <div class="row-sec">
            <div class="col-sec text-align">
                <div class="d-flex"> <i class="far fa-lightbulb"></i> </div>
                <h5> ​How We Teach </h5>
                <p>Distance learning will be with specialized Arabic teachers after determining your Arabic level</p>   
            </div>
            <div class="col-sec text-align">
                <div class="d-flex"><i class="fas fa-medal"></i></div>
                <h5> Results </h5>
                <p>You will be a very good Arabic speaker with a lot of practice and use with your friends</p>   
            </div>
             <div class="col-sec text-align">
                <div class="d-flex"><i class="fas fa-question-circle"></i></div>
                <h5> Support </h5>
                <p>If you have any questions or inquiries, do not hesitate to contact us and we will answer you as soon as possible</p>   
            </div>
            <div class="col-sec text-align">
                <div class="d-flex"><i class="fas fa-certificate"></i></div>
                <h5> Get Certified </h5>
                <p>You will receive an approved certificate upon completion of the course you have registered for</p>   
            </div>
        </div>
        
    </div>
</section>

<section class="testimony-section">
    <div class="overlay" style="background-image: url('../img/bg_2.jpg');"></div>
    <div class="container">
        <h6 class="subheading text-align">Testimonial</h6>
        <h2>What Are Students Says</h2>
            <div class="item d-grid">
                <div class="testimony-wrap">
                    <div class="text">
                        <p class="star">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                        <p class="mb-4">Thank you for the excellent classes. Our review is that it is
                             focused hence it is individual learning centric. Saved us a lot of travel related hassle</p>
                        <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(../img/person_2.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Adam Louis</p>
                            <span class="position">France</span>
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
                        <p class="mb-4">A very very effective and enjoyable way to learn Arabic! And the teachers 
                            are wonderful! I learned so much already from my first lesson </p>
                        <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(../img/person_4.png)"></div>
                        <div class="pl-3">
                            <p class="name">Michael Jarman</p>
                            <span class="position">America</span>
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
                        <p class="mb-4">Great teachers online no matter whether you are just starting to study Arabic, or need to become proficient in exchange with professional peers!</p>
                        <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(../img/person_4.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Sonja Schmidt </p>
                            <span class="position">Germany</span>
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
                        <p class="mb-4">I found Arabia the best place for learning Arabic courses. They have highy professional teachers who are helping the students promptly.</p>
                        <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(../img/person_3.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Roger Scott</p>
                            <span class="position">India</span>
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