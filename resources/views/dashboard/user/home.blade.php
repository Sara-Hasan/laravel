@extends('layouts.app')
@section('content')
<header style="background-image: url('../img/bg2.jpeg'); height: 200px;">
    <div class="header-bg">
        <div class="head text-align" style="padding-top: 8rem;">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">
                Home 
                <i class="fa fa-chevron-right"></i></a></span> <span>
                    Profile
                <i class="fa fa-chevron-right"></i></span>
            </p>
            <h2> Profile </h2>
        </div>
    </div>  
</header>

<section class="pick-course">
    <div class="container">
        {{-- <tbody>
            <tr>
                <td>{{ Auth::guard('web')->user()->name }}</td>
                <td>{{ Auth::guard('web')->user()->email }}</td>
                <td>
                    <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                </td>
            </tr>
        </tbody>             --}}
        {{-- @foreach ( $users as $user ) --}}

        <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-head">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">User Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#link" role="tab" aria-controls="profile" aria-selected="false">Information courses</a>
                        </li>
                    </ul>
                </div>
                    </div>
                {{-- @endforeach --}}

                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="/storage/{{ Auth::guard('web')->user()->image }}" alt="Users Image" style="width: 150px;height:130px"/>
                        </div>
                        {{-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::guard('web')->user()->name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::guard('web')->user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::guard('web')->user()->phone }}</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="profile-tab">

                                <div class="container">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                  <tr>
                                    <th>instructor name</th>
                                    <th>Link</th>
                                    <th>Houre of lesson</th>
                                    <th>Arabic Level</th>
                                    <th>days</th>
                                    <th>course name</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                          <p class="fw-bold mb-1">John Doe</p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <p class="fw-normal mb-1">Software engineer</p>
                                    </td>
                                    <td>Senior</td>
                                    <td>Senior</td>
                                    <td>Senior</td>
                                    <td>Senior</td>
                                  </tr>
                                 
                                </tbody>
                              </table>
                            </div>
                        </div>
                            {{-- <div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Link</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Your Teacher</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>10$/hr</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Houre of lesson</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>230</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Arabic Level</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Expert</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Days</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>6 months</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Course Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>arabic</p>
                                    </div>
                                </div>
                    </div> --}}
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    </div>
</section>

@endsection