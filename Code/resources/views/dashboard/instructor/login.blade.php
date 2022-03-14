@extends('layouts.app')
    @section('content')
    <section class="login">
        <div class="container">
            <div class="logning flex-container d-flex">
                <div class="bg-contact">
                    <div class="bg-opacity flex-item-left">
                        {{-- <div class="text "> --}}
                            <h3>​ Hello, Friends! </h3>
                            <p> ​Enter your personal details
                                 and start journey with us </p>
                            <button><a href="{{ route('instructor.register') }}">SIGN UP</a></button>
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="send flex-item-right pl-md-5 py-5">
                    <h1>SIGN IN</h1>
                    <form action="{{ route('instructor.check') }}" method="post" autocomplete="off">
                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        @csrf
                        @csrf
                        <input type="text" id="email" name="email" placeholder="Enter a valid email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>

                        <input type="password" id="password" name="password" placeholder="Enter password" value="{{ old('password') }}">
                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>

                        {{-- <input type="submit" value="SIGN IN"> --}}
                        <button type="submit" class="btn btn-primary">SIGN IN</button>
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
    <title>Instructor Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>Instructor Login</h4><hr>
                 <form action="{{ route('instructor.check') }}" method="post">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                         <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                         <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Login</button>
                     </div>
                     <br>
                 </form>
            </div>
        </div>
    </div>
</body>
</html> --}}