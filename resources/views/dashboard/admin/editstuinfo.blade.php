@extends('dashboard.admin.masteradmin')
@section('title')
 Arabia : Edit  Student Information
@endsection
@section('content')
  <div class="row">
    <div class="col-12">
<div class="container-fluid py-4">
  <div class="card z-index-0">
    <div class="card-header pt-4">  
      <h5> Update Student Information:</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.stuinfo.update', $info->id ) }}" role="form text-left" method="post" enctype="multipart/form-data" autocomplete="off" >
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
            <strong>instructors name:</strong>
              <select name="instructor_name">
                <?php
                    foreach ($instructors as $item ) { ?>
                      <option value="{{ $item->name }}">
                        {{ $item->name }}
                      </option>
                <?php  } ?>
              </select>
              @error('instructor_name')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
        </div>
        <div class="mb-3">
            <input type="text" name='Link' class="form-control" placeholder="Link" value="{{ $info->Link }}">
          <span class="text-danger">@error('Link'){{ $message }}@enderror</span>
          </div>
        <div class="mb-3">
          <input type="text" name='Houre_of_lesson' class="form-control" placeholder="Houre of lesson" value="{{ $info->Houre_of_lesson }}">
          <span class="text-danger">@error('Houre_of_lesson'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="text" name='Arabic_Level' class="form-control" placeholder="Arabic Level" value="{{ $info->Arabic_Level }}">
          <span class="text-danger">@error('Arabic_Level'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="text" name='days' class="form-control" placeholder="days" value="{{ $info->days }}">
          <span class="text-danger">@error('days'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
            <strong>course name:</strong>
              <select name="course_id">
                <?php
                    foreach ($course as $item ) { ?>
                      <option value="{{ $item->id }}">
                        {{ $item->name_course }}
                      </option>
                <?php  } ?>
              </select>
              @error('course_id')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
        </div>
        {{-- <div class="mb-3">
            <input type="text" name='course_id' class="form-control" placeholder="course_id">
            <span class="text-danger">@error('course_id'){{ $message }}@enderror</span>
          </div> --}}
          <div class="mb-3">
            <input type="text" name='order_id' class="form-control" placeholder="order id" value="{{ $info->order_id }}">
            <span class="text-danger">@error('order_id'){{ $message }}@enderror</span>
          </div>        <div class="text-center">
          <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update info</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
    
  </div>
@endsection