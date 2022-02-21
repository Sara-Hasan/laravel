@extends('dashboard.admin.masteradmin')
@section('content')
  <div class="row">
    <div class="col-12">
<div class="container-fluid py-4">
  <div class="card z-index-0">
    <div class="card-header pt-4">  
      <h5> Update User:
      </h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.user.update', $user->id) }}" role="form text-left" method="post" enctype="multipart/form-data" autocomplete="off" >
        @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif
        @if ($message = Session::get('success'))
      <div class="alert alert-success">
      <p>{{ $message }}</p>
      </div>
     @endif
        @csrf     
        @method('PUT')
        <div class="mb-3">
          <input type="text" value="{{ $user->name }}" name="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="email-addon">
          <span class="text-danger">@error('name'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="text" value="{{ $user->phone }}" name="phone" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="email-addon">
          <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="email" value="{{ $user->email }}" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="password" value="{{ $user->password }}" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <label for="img">Image Upload</label>
              <input type="file" name="image" id="image">
          @error('image')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          </div>
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