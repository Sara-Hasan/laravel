@extends('layouts.app')
@section('title')
 Arabia : Booking 
@endsection
@section('content')
<header style="background-image: url('../img/bg2.jpeg'); height: 200px;">
    <div class="header-bg">
        <div class="head text-align" style="padding-top: 8rem;">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">
                Home 
                <i class="fa fa-chevron-right"></i></a></span> <span>
                    Course Lists
                <i class="fa fa-chevron-right"></i></span>
                About Course
                <i class="fa fa-chevron-right"></i></span>
                My course Lists
                <i class="fa fa-chevron-right"></i></span>
            </p>
            <h2> My course Lists </h2>
        </div>
    </div>  
</header>



<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card shopping-cart" style="border-radius: 15px;">
          <div class="card-body text-black">
            <div class="row">
              <div class="col-lg-12 px-5 py-4">
                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your Courses</h3>
                @php $total = 0;  $id = 0 @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price_course'] * $details['quantity'] @endphp
                <div class="d-flex align-items-center mb-5 up" data-id="{{ $id }}">
                  <div class="flex-shrink-0">
                    <img src="/storage/{{ $details['image_course'] }}"
                      class="img-fluid" style="width: 100px; height:100px" alt="image of course">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <a href="#!" class="float-end text-black remove-from-cart"><i class="fa-solid fa-x"></i></a>
                  {{-- <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa-solid fa-xmark-large"></i></button> --}}
                    <h5 class="text-primary">{{ $details['name_course'] }}</h5>
                    <div class="d-flex align-items-center">
                      <p class="fw-bold mb-0 me-5 pe-3">${{ $details['price_course'] }}</p>
                      <div class="def-number-input number-input safari_only">
                        {{-- <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" /> --}}
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              @endif
                <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">
                <div class="d-flex justify-content-between p-2 mb-2" style="background-color: #e1f5fe;">
                  <h5 class="fw-bold mb-0">Total:</h5>
                  <h5 class="fw-bold mb-0">${{ $total }}</h5>
                  {{-- ${{ $details['price_course'] * $details['quantity'] }} --}}
                </div>
                <a href="{{ route('user.book') }}" class="btn btn-primary" style="float: right">proceed to checkout</a>
                <a href="{{ route('courses') }}"><i class="fas fa-angle-left me-2"></i>Back to courses</a>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  $(".update-cart").change(function (e) {
    e.preventDefault();
    var ele = $(this);
    $.ajax({
        url: "{{ route('updatecart') }}",
        method: "patch",
        data: {
            _token: '{{ csrf_token() }}', 
            id: ele.parents(".up").attr("data-id"), 
            quantity: ele.parents(".up").find(".quantity").val()
        },
        success: function (response) {
          window.location.reload();
        }
    });
  });

  $(".remove-from-cart").click(function (e) {
    e.preventDefault();
    var ele = $(this);
    if(confirm("Are you sure want to remove?")) {
        $.ajax({
            url: "{{ route('removefromcart') }}",
            method: "DELETE",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents(".up").attr("data-id")
            },
            success: function (response) {
                window.location.reload();
            }
        });
    }
});
</script> 

@endsection
