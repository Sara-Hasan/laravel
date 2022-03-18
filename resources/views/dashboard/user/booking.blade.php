@extends('layouts.app')
@section('content')
<header style="background-image: url('../img/bg2.jpeg'); height: 200px;">
    <div class="header-bg">
        <div class="head text-align" style="padding-top: 8rem;">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">
                Home 
                <i class="fa fa-chevron-right"></i></a></span> <span>
                    Course Lists
                <i class="fa fa-chevron-right"></i></span>
            </p>
            <h2> Course Lists </h2>
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
                @php $total = 0 @endphp

                @if(session('cart'))
        
                    @foreach(session('cart') as $id => $details)
        
                        @php $total += $details['price_course'] * $details['quantity'] @endphp
                <div class="d-flex align-items-center mb-5 up" data-id="{{ $id }}">
                  <div class="flex-shrink-0">
                    <img src="/storage/{{ $details['image_course'] }}"
                      class="img-fluid" style="width: 150px;" alt="image of course">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <a href="#!" class="float-end text-black remove-from-cart"><i class="fa-solid fa-x"></i></a>
                  {{-- <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa-solid fa-xmark-large"></i></button> --}}
                    <h5 class="text-primary">{{ $details['name_course'] }}</h5>
                    <div class="d-flex align-items-center">
                      <p class="fw-bold mb-0 me-5 pe-3">${{ $details['price_course'] }}</p>
                      <div class="def-number-input number-input safari_only">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
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

                <form class="mb-5">

                  <div class="form-outline mb-5">
                    <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                      placeholder="Enter Card Number" minlength="19" maxlength="19" name="Card_Number"/>
                    <label class="form-label" for="typeText">Card Number</label>
                  </div>

                  <div class="form-outline mb-5">
                    <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                      placeholder="Enter your name on card" name="Name_on_card"/>
                    <label class="form-label" for="typeName">Name on card</label>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                        <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="01/22"
                          size="7" id="exp" minlength="7" maxlength="7" name="Expiration"/>
                        <label class="form-label" for="typeExp">Expiration</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-5">
                      <div class="form-outline">
                        <input type="password" id="typeText" class="form-control form-control-lg"
                          value="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                          <input type="password" id="typeText" class="form-control form-control-lg" value="{{ $details['id'] }}"/>
                          <input type="text" id="typeText" class="form-control form-control-lg" value="{{ $total }}"/>
                        <label class="form-label" for="typeText">Cvv</label>
                      </div>
                    </div>
                  </div>

                  <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit <a
                      href="#!">obcaecati sapiente</a>.</p>

                  <button type="button" class="btn btn-primary btn-block btn-lg">Buy now</button>

                  <h5 class="fw-bold mb-5" style="position: absolute; bottom: 0;">
                    <a href="{{ url('/') }}"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                  </h5>

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
        url: "{{ route('user.updatecart') }}",
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
            url: "{{ route('user.removefromcart') }}",
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
