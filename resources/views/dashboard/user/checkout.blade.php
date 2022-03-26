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
              <div class="col-lg-6 px-5 py-4">

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
                    <h5 class="text-primary">{{ $details['name_course'] }}</h5>
                    <div class="d-flex align-items-center">
                      <p class="fw-bold mb-0 me-5 pe-3">${{ $details['price_course'] }}</p>
                      <div class="def-number-input number-input safari_only">
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

              </div>
              <div class="col-lg-6 px-5 py-4">

                <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Payment</h3>

                <form action="{{ route('user.mycourse.store') }}" role="form text-left" method="post" enctype="multipart/form-data" autocomplete="off" >
                  @csrf
                  <div class="form-outline mb-5">
                    <input type="text" class="form-control form-control-lg" 
                     placeholder="Enter Card Number" minlength="19" maxlength="19" name="Card_Number"/>
                    <label class="form-label" for="typeText">Card Number</label>
                    <span class="text-danger">@error('Card_Number'){{ $message }}@enderror</span>
                  </div>

                  <div class="form-outline mb-5">
                    <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                      placeholder="Enter your name on card" name="Name_on_card"/>
                    <label class="form-label" for="typeName">Name on card</label>
                    <span class="text-danger">@error('Name_on_card'){{ $message }}@enderror</span>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                        <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="01/22"
                          size="7" id="exp" name="Expiration"/>
                        <label class="form-label" for="typeExp">Expiration</label>
                        <span class="text-danger">@error('Expiration'){{ $message }}@enderror</span>
                      </div>
                    </div>
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                        <input type="password" id="typeText" class="form-control form-control-lg"
                           size="1" minlength="3" maxlength="3" name="Cvv"/>
                          <input type="text" id="typeText" class="form-control form-control-lg" name="course_id" value="{{ $id }}" />
                          <input type="text" id="typeText" class="form-control form-control-lg" name="total" value="{{ $total }}" />
                          {{-- <input type="text" id="typeText" class="form-control form-control-lg" name="phone" value="{{ Auth::user()->phone }}" /> --}}
                          <label class="form-label" for="typeText">Cvv</label>
                        <span class="text-danger">@error('Cvv'){{ $message }}@enderror</span>
                      </div>
                    </div>
                  </div>
                      <div class="flo">
                        <h5 class="fw-bold mb-5" style="bottom: 0;">
                          <a href="{{ route('courses') }}"><i class="fas fa-angle-left me-2"></i>Back to courses</a>
                        </h5>
                        <button type="submit" class="btn btn-primary btn-block btn-lg" style="width:50%">Book now</button>
                        {{-- <a href="{{ route('user.mycourse.index', Auth::user()->id) }}"><i class="fas fa-angle-left me-2"></i>order</a> --}}

                      </div>

                </form>

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
