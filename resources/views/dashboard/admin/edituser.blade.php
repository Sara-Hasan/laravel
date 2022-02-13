@extends('dashboard.admin.masteradmin')
@section('content')
  <div class="row">
    <div class="col-12">
<div class="container-fluid py-4">
  <div class="card z-index-0">
    <div class="card-header pt-4">  
      <h5> Update User:{{ $users->id }} </h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.user.update') }}" role="form text-left" method="post" enctype="multipart/form-data" autocomplete="off" >
        @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif
        @csrf
        <div class="mb-3">
          <input type="text" value='{{ $users->name }}' name='name' class="form-control" placeholder="Name" aria-label="Name" aria-describedby="email-addon">
          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="text" name='phone' class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="email-addon">
          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="email" name='email' class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="password" name='password' class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update User</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
    
  </div>
@endsection