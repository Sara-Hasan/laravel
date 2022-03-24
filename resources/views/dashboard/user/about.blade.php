@extends('layouts.app')
@section('content')
<header style="background-image: url('../img/bg2.jpeg'); height: 200px;">
    <div class="header-bg">
        <div class="head text-align" style="padding-top: 8rem;">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">
                Home 
                <i class="fa fa-chevron-right"></i></a></span> <span>
                About us
                <i class="fa fa-chevron-right"></i></span>
            </p>
            <h2> About Us</h2>
        </div>
    </div>  
</header>

<section class="ftco-about img">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-12 about-intro">
         <div class="row">
          <div class="col-md-6 d-flex">
           <div class="d-flex about-wrap">
            <div class="img d-flex align-items-center justify-content-center" style="background-image:url('../img/about-1.jpeg');">
            </div>
            <div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url('../img/about.jpg');">
            </div>
          </div>
        </div>
        <div class="col-md-6 pl-md-5 py-5">
         <div class="row justify-content-start pb-3">
           <div class="col-md-12 heading-section ftco-animate fadeInUp ftco-animated">
            <span class="subheading">Enhanced Your Skills</span>
            <h2 class="mb-4">Learn Anything You Want Today</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="{{ route('user.contactcreate') }}" class="btn btn-primary">Get in touch with us</a></p>
          </div>
        </div>
      </div>
     </div>
     </div>
     </div>
     {{-- <div class="flex-container d-flex">
        <div class="flex-item-left d-flex">
          <div class="d-flex about-wrap">
            <div class="img d-flex justify-content-center align-items-center" style="background-image: url('../img/about-1.jpeg');"></div>
            <div class="img-2 d-flex justify-content-center align-items-center" style="background-image: url('../img/about.jpg');"></div>
          </div>
        </div>
      <div class="flex-item-right pl-md-5 py-5">
        <div class="pb-3">
          <div class="heading-section">
            <span class="subheading">Enhanced Your Skills</span>
            <h2 class="mb-4">Learn Anything You Want Today</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary">Get in touch with us</a></p>
          </div>
        </div>
      </div>
   </div> --}}
   </div>
   </section>
@endsection