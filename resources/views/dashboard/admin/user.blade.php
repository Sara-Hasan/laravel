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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $users as $user )
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{  $user->image }}" class="avatar avatar-sm me-3" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{  $user->name }}</h6>
                          <p class="text-xs text-secondary mb-0">{{  $user->email }}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Manager</p>
                      <p class="text-xs text-secondary mb-0">Organization</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Online</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                    </td>
                    <td class="align-middle">
                      <a class="btn btn-link text-dark px-3 mb-0" href={{ route('admin.user.edit',$user->id) }}><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="?do=add"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
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
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart" aria-hidden="true"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  @endif
@endsection