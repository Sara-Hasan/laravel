@extends('dashboard.admin.masteradmin')
@section('content')
@if (isset( $_GET["do"])) 
  <div class="row">
    <div class="col-12">
<div class="container-fluid py-4">
  <div class="card z-index-0">
    <div class="card-header pt-4">
      <h5> Create User: </h5>
    </div>
    <div class="row px-xl-5 px-sm-4 px-3">
    </div>
    <div class="card-body">
      <form action="{{ route('admin.user.store') }}" role="form text-left" method="post" enctype="multipart/form-data" autocomplete="off" >
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
        <div class="mb-3">
          <input type="text" name='name' class="form-control" placeholder="Name" aria-label="Name" aria-describedby="email-addon">
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
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <label for="img">Image Upload</label>
              <input type="file" name="image" id="img" required>
          @error('image')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          </div>
      </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Add User</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@else
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Authors table </h6>
            <a class="create" href="?do=add"><button type="button" class="btn btn-success left">Create User</button></a>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Phone</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created-at</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $user as $item )
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="/storage/{{$item->image}}" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                          <p class="text-xs text-secondary mb-0">{{ $item->email }}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $item->phone }}</p>
                      {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $item->created_at }}</span>
                    </td>
                    <td class="align-middle">
                      <a class="btn btn-outline-primary btn-sm mb-0" href={{ route('admin.user.edit',$item->id) }}><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                    </td>
                      <td class="align-middle">
                      <form action="{{ route('admin.user.destroy',$item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-primary btn-sm mb-0">
                        {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0"> --}}
                          <i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete
                        {{-- </a> --}}
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Projects table</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Spotify</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$2,500</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">working</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0">
                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  @endif
@endsection