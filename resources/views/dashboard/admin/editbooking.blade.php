@extends('dashboard.admin.masteradmin')
@section('title')
 Arabia : Edit Booking 
@endsection
@section('content')
  <div class="row">
    <div class="col-12">
<div class="container-fluid py-4">
  <div class="card z-index-0">
    <div class="card-header pt-4">  
      <h5> Update booking:</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.book.update', $booking->id ) }}" role="form text-left" method="post" enctype="multipart/form-data" autocomplete="off" >
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
          <input type="text" value="{{ $booking->Card_Number }}" name="Card_Number" class="form-control" disabled>
          <span class="text-danger">@error('Card_Number'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="text" value="{{ $booking->Name_on_card }}" name="Name_on_card" class="form-control" disabled>
          <span class="text-danger">@error('Name_on_card'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="text" value="{{ $booking->Expiration }}" name="Expiration" class="form-control" disabled>
          <span class="text-danger">@error('Expiration'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
          <input type="text" value="{{ $booking->Cvv }}" name="Cvv" class="form-control" disabled>
          <span class="text-danger">@error('Cvv'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
            <input type="text" value="{{ $booking->total }}" name="total" class="form-control">
            <span class="text-danger">@error('total'){{ $message }}@enderror</span>
          </div>
          <div class="mb-3">
            <input type="text" value="{{ $booking->phone }}" name="phone" class="form-control">
            <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
          </div>
          <div class="mb-3">
            <input type="text" value="{{ $booking->user_id }}" name="user_id" class="form-control" disabled>
            <span class="text-danger">@error('user_id'){{ $message }}@enderror</span>
          </div>
          <div class="mb-3">
            <input type="text" value="{{ $booking->course_id }}" name="course_id" class="form-control">
            <span class="text-danger">@error('course_id'){{ $message }}@enderror</span>
          </div>
        <div class="text-center">
          <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update booking</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
    
  </div>
@endsection