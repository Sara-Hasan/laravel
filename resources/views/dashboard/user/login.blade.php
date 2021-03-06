@extends('layouts.app')
@section('title')
 Arabia : SIGN IN
@endsection
    @section('content')
    <section class="login">
        <div class="container">
            <div class="logning flex-container d-flex">
                {{-- <div class="bg-contact">
                    <div class="bg-opacity flex-item-left">
                        <h3>​ Hello, Friends! </h3>
                        <p> ​Enter your personal details
                             and start journey with us </p>
                        <button><a href="{{ route('user.register') }}">SIGN UP</a></button>
                    </div>
                </div> --}}
                <div class="send flex-item-right pl-md-5 py-5">
                    <h1>SIGN IN</h1>
                    <form action="{{ route('user.check') }}" method="post" autocomplete="off">
                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        @csrf
                        <input type="text" id="email" name="email" placeholder="Enter a valid email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>

                        <input type="password"id="password" name="password" placeholder="Enter password" value="{{ old('password') }}">
                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>

                        <button type="submit" class="btn btn-primary">SIGN IN</button>
                        <p class="text-center go">Don't have an account? <a href="{{ route('user.register') }}" class="link">Sign Up</a></p>

                    </form>
                </div>
            </div>
        </div>
       </section>
       @endsection