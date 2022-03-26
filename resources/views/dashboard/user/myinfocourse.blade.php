@extends('layouts.app')
@section('title')
 Arabia : Checkout 
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
            </p>
            <h2> Course Lists </h2>
        </div>
    </div>  
</header>

<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container">
      <div class="col-xl-6 mb-xl-0 mb-4">
        <div class="card bg-transparent shadow-xl">
          <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
            <span class="mask bg-gradient-dark"></span>
            <div class="card-body position-relative z-index-1 p-3">
              <i class="fas fa-wifi text-white p-2" aria-hidden="true"></i>
              {{-- {{ $booking->Name_on_card }} --}}
      @foreach ($booking as $item)
              <h5 class="text-white mt-4 mb-5 pb-2">{{ $item->Card_Number }} </h5>
              {{-- 4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852 --}}
              <div class="d-flex">
                <div class="d-flex">
                  <div class="me-4">
                    <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                    <h6 class="text-white mb-0"> {{ $item->Name_on_card }}</h6>
                  </div>
                  <div>
                    <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                    <h6 class="text-white mb-0">{{ $item->Expiration }}</h6>
                  </div>
                </div>
                <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                  <img class="w-60 mt-2" src="../assets/img/logos/mastercard.png" alt="logo">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Course Name</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>          
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="/storage/{{ Auth::user()->image }}"
                alt=""
                style="width: 45px; height: 45px"
                class="rounded-circle"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1">{{ Auth::user()->name }}</p>
            </div>
          </div>
        </td>
        <td>
          <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
        </td>
        <td>
          <p class="fw-bold mb-1">{{ Auth::user()->phone }}</p>
        </td>
        <td>Classic Arabic {{ $item->course_id }}</td>
        <td>
      ${{ $item->total }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</section>
@endsection
