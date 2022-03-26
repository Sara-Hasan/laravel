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
              <h5 class="text-white mt-4 mb-5 pb-2"> 4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
              <div class="d-flex">
                <div class="d-flex">
                  <div class="me-4">
                    <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                    <h6 class="text-white mb-0">Jack Peterson</h6>
                  </div>
                  <div>
                    <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                    <h6 class="text-white mb-0">11/22</h6>
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
        <th>Name_on_card</th>
        <th>Email</th>
        <th>Course Name</th>
        <th>Total</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                alt=""
                style="width: 45px; height: 45px"
                class="rounded-circle"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1">John Doe</p>
              <p class="text-muted mb-0">john.doe@gmail.com</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">Software engineer</p>
          <p class="text-muted mb-0">IT department</p>
        </td>
        <td>
          <span class="badge badge-success rounded-pill">Active</span>
        </td>
        <td>Senior</td>
        <td>
          <button type="button" class="btn btn-link btn-sm btn-rounded">
            Edit
          </button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                class="rounded-circle"
                alt=""
                style="width: 45px; height: 45px"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1">Alex Ray</p>
              <p class="text-muted mb-0">alex.ray@gmail.com</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">Consultant</p>
          <p class="text-muted mb-0">Finance</p>
        </td>
        <td>
          <span class="badge badge-primary rounded-pill"
                >Onboarding</span
            >
        </td>
        <td>Junior</td>
        <td>
          <button
                  type="button"
                  class="btn btn-link btn-rounded btn-sm fw-bold"
                  data-mdb-ripple-color="dark"
                  >
            Edit
          </button>
        </td>
      </tr>
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                class="rounded-circle"
                alt=""
                style="width: 45px; height: 45px"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1">Kate Hunington</p>
              <p class="text-muted mb-0">kate.hunington@gmail.com</p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1">Designer</p>
          <p class="text-muted mb-0">UI/UX</p>
        </td>
        <td>
          <span class="badge badge-warning rounded-pill">Awaiting</span>
        </td>
        <td>Senior</td>
        <td>
          <button
                  type="button"
                  class="btn btn-link btn-rounded btn-sm fw-bold"
                  data-mdb-ripple-color="dark"
                  >
            Edit
          </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</section>
@endsection
