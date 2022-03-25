@extends('layouts.app')
@section('title')
 Arabia : SIGN UP
@endsection
@section('content')
<section class="login sign">
    <div class="container">
        <div class="logning flex-container d-flex">
            {{-- <div class="bg-contact">
                <div class="bg-opacity flex-item-left">
                    <h3>​ Hello, Friends! </h3>
                    <p> ​Enter your personal details
                         and start journey with us </p>
                    <button> <a href="{{ route('user.login') }}">SIGN IN</a></button>
                </div>
            </div> --}}
            <div class="send flex-item-right pl-md-5 py-5">
                <h1>SIGN UP</h1>
                <form action="{{ route('user.create') }}" method="post" autocomplete="off">
                    @if (Session::get('success'))
                         {{-- <div class="alert alert-success">
                             {{ Session::get('success') }}
                         </div> --}}
                          <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    {{ Session::get('success') }}
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </div>
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

                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Register</button>                    

                    <p class="text-center go">Already have an account? <a href="{{ route('user.login') }}" class="link">Sign In</a></p>

                </form>
            </div>
        </div>
    </div>
   </section>

@endsection


