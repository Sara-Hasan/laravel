@extends('dashboard.admin.masteradmin')
@section('content')
@if (isset( $_GET["do"])) 
  <div class="row">
    <div class="col-12">
<div class="container-fluid py-4">
  <div class="card z-index-0">
    <div class="card-header pt-4">
      <h5> Create Bookings: </h5>
    </div>
    <div class="row px-xl-5 px-sm-4 px-3">
    </div>
    <div class="card-body">
      <form action="{{ route('admin.book.store') }}" role="form text-left" method="post" enctype="multipart/form-data" autocomplete="off" >
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
          <input type="text" name='name_course' class="form-control" placeholder="Name Course" aria-label="Name">
          <span class="text-danger">@error('name_course'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="text" name='desc_course' class="form-control" placeholder="Description Course" aria-label="Description" >
          <span class="text-danger">@error('desc_course'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="text" name='houre_course' class="form-control" placeholder="Houre Course" aria-label="Houre">
          <span class="text-danger">@error('houre_course'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="text" name='price_course' class="form-control" placeholder="Price Course" aria-label="price_course">
          <span class="text-danger">@error('price_course'){{ $message }}@enderror</span>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <label for="img">Image Upload</label>
              <input type="file" name="image_course" id="image_course" required>
          @error('image_course')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
          </div>
      </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Add Booking</button>
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
        <h6>Projects table</h6>
        <a class="create" href="?do=add"><button type="button" class="btn btn-success left">Create Book</button></a>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Card Number </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name on card</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Expiration</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Cvv</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Total</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">User Id</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Course Id</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            @foreach ($booking as $item)
            <tbody>
              <tr>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $item->id }}</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $item->Card_Number }}</p>
                </td>
                <td>
                  <div class="d-flex px-2">
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">{{ $item->Name_on_card }}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-sm font-weight-bold mb-0">{{ $item->Expiration }}</p>
                </td>
                <td>
                  <span class="text-xs font-weight-bold">{{ $item->Cvv }}</span>
                </td>
                <td class="align-middle text-center">
                  <div class="d-flex align-items-center justify-content-center">
                    <span class="me-2 text-xs font-weight-bold">{{ $item->total }}</span>
                    
                  </div>
                </td>
                <td class="align-middle text-center">
                  <div class="d-flex align-items-center justify-content-center">
                    <span class="me-2 text-xs font-weight-bold">{{ $item->user_id }}</span>
                    
                  </div>
                </td>
                <td class="align-middle text-center">
                  <div class="d-flex align-items-center justify-content-center">
                    <span class="me-2 text-xs font-weight-bold">{{ $item->course_id }}</span>
                    
                  </div>
                </td>
                <td class="align-middle">
                  <a class="btn btn-outline-primary btn-sm mb-0" href={{ route('admin.course.edit',$item->id) }}><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
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
    
  </div>
  @endif
@endsection
