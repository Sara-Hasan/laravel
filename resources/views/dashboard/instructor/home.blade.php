@extends('dashboard.instructor.nav')
@section('content')
    <section class="con">
        <div class="container">
                <div class="courses">
                    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                 <h4>Instructor Dashboard</h4><hr>
                 <table class="table table-striped table-inverse table-responsive">
                     <thead class="thead-inverse">
                         <tr>
                             <th>Name</th>
                             <th>Email</th>
                             <th>phone</th>
                             <th>Action</th>
                         </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td scope="row">{{ Auth::guard('instructor')->user()->name }}</td>
                                 <td>{{ Auth::guard('instructor')->user()->email }}</td>
                                 <td>{{ Auth::guard('instructor')->user()->phone }}</td>
                                 <td>
                                     <a href="{{ route('instructor.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                     <form action="{{ route('instructor.logout') }}" id="logout-form" method="post">@csrf</form>
                                 </td>
                             </tr>
                         </tbody>
                 </table>
            </div>
        </div>
    </div>
                </div>
        </div>
    </section>

@endsection