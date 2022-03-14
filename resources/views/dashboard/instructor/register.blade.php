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
                     <a href="{{ route('instructor.login') }}">I already have an account, Login now</a>

                    {{-- </div> --}}
                </div>
            </div>
            <div class="send flex-item-right pl-md-5 py-5">
                <h1>SIGN UP</h1>
                <form action="{{ route('instructor.create') }}" method="post">
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




{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instructor Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>Instructor Register</h4><hr>
                 <form action="{{ route('instructor.create') }}" method="post">
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
                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                         <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter phone number" value="{{ old('phone') }}">
                        <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                    </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                         <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password" value="{{ old('cpassword') }}">
                        <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                    </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Register</button>
                     </div>
                     <br>
                     <a href="{{ route('instructor.login') }}">I already have an account, Login now</a>
                 </form>
            </div>
        </div>
    </div>
</body>
</html> --}}