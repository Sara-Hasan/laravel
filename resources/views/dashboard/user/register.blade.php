@extends('layouts.app')
@section('content')
<section class="login sign">
    <div class="container">
        <div class="logning flex-container d-flex">
            <div class="bg-contact">
                <div class="bg-opacity flex-item-left">
                    {{-- <div class="text "> --}}
                        <h3>​ Hello, Friends! </h3>
                        <p> ​Enter your personal details
                             and start journey with us </p>
                        <button> <a href="{{ route('user.login') }}">SIGN IN</a></button>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="send flex-item-right pl-md-5 py-5">
                <h1>SIGN UP</h1>
                <form action="{{ route('user.create') }}" method="post" autocomplete="off">
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
                    <input type="text" id="name" name="name" placeholder="Enter your Name" value="{{ old('name') }}"/>
                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>

                    <input type="text" id="email" name="email" placeholder="Enter a valid email address">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>

                    <input type="text" id="phone" name="phone" placeholder="Enter your phone (e.g. +14155552675)">
                    <span class="text-danger">@error('phone'){{ $message }} @enderror</span>

                    <input type="password" id="password" name="password" placeholder="password">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>

                    <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password" value="{{ old('cpassword') }}">
                    <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>

                    <button type="submit" class="btn btn-primary">Register</button>

                </form>
            </div>
        </div>
    </div>
   </section>

@endsection


