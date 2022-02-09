@extends('layouts.app')
@section('content')
<header style="background-image: url('../img/bg2.jpeg'); height: 200px;">
    <div class="header-bg">
        <div class="head text-align" style="padding-top: 8rem;">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">
                Home 
                <i class="fa fa-chevron-right"></i></a></span> <span>
                Contact us
                <i class="fa fa-chevron-right"></i></span>
            </p>
            <h2> Contact us</h2>
        </div>
    </div>  
</header>

<section class="contact img">
    <div class="container">
        <div class="contacting flex-container d-flex">
            <div class="bg-contact">
                <div class="bg-opacity flex-item-left">
                    {{-- <div class="text "> --}}
                        <h3> ​Need Help? </h3>
                        <p> ​Our specialists will contact you for details and clarification.
                            We’ll be glad to help you find the course. </p>
                        <ul>
                            <li> <i class="fab fa-facebook-f"></i> </li>
                            <li> <i class="fab fa-twitter"></i> </li>
                            <li> <i class="fab fa-instagram"></i> </li>
                        </ul>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="send flex-item-right pl-md-5 py-5">
                <form action="{{ route('user.contact') }}" method="post" autocomplete="off">
                    @if (Session::get('success'))
                         <div class="alert alert-success">
                             {{ Session::get('success') }}
                         </div>
                    @endif
                    @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                    @csrf
                    <div class="same-col">
                        <div class="form-group">
                            <p for="name" class="label"> Name </p>
                            <input type="text" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <p for="phone" class="label"> Phone </p>
                            <input type="text" id="phone" name="phone" placeholder="Enter your phone" value="{{ old('phone') }}">
                            <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                        </div>
                    </div>
                    <p for="email" class="label"> Email </p>
                    <input type="text" id="email" name="email" placeholder="Enter a valid email address" value="{{ old('address') }}">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>

                    <p for="subject" class="label"> Subject </p>
                    <input type="text" id="subject" name="subject" placeholder="Enter your subject" value="{{ old('subject') }}">
                    <span class="text-danger">@error('subject'){{ $message }} @enderror</span>

                    <p for="message" class="label"> Message </p>
                    <input type="text" id="message" name="message" placeholder="Enter your message..." value="{{ old('message') }}">
                    <span class="text-danger">@error('message'){{ $message }} @enderror</span>

                    <button type="submit" class="btn btn-primary">Request Clarification</button>
                </form>
            </div>
        </div>
    </div>
   </section>
@endsection