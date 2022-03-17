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

<section class="vh-100" style="background-color: #fdccbc;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <p><span class="h2">Shopping Cart </span><span class="h4">(1 item in your cart)</span></p>
  
          <div class="card mb-4">
            <div class="card-body p-4">
  
              <div class="row align-items-center">
                <div class="col-md-2">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp" class="img-fluid" alt="Generic placeholder image">
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                  <div>
                    <p class="small text-muted mb-4 pb-2">Name</p>
                    <p class="lead fw-normal mb-0">iPad Air</p>
                  </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                  <div>
                    <p class="small text-muted mb-4 pb-2">Color</p>
                    <p class="lead fw-normal mb-0"><i class="fas fa-circle me-2" style="color: #fdd8d2;"></i> pink rose</p>
                  </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                  <div>
                    <p class="small text-muted mb-4 pb-2">Quantity</p>
                    <p class="lead fw-normal mb-0">1</p>
                  </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                  <div>
                    <p class="small text-muted mb-4 pb-2">Price</p>
                    <p class="lead fw-normal mb-0">$799</p>
                  </div>
                </div>
                <div class="col-md-2 d-flex justify-content-center">
                  <div>
                    <p class="small text-muted mb-4 pb-2">Total</p>
                    <p class="lead fw-normal mb-0">$799</p>
                  </div>
                </div>
              </div>
  
            </div>
          </div>
  
          <div class="card mb-5">
            <div class="card-body p-4">
  
              <div class="float-end">
                <p class="mb-0 me-5 d-flex align-items-center">
                  <span class="small text-muted me-2">Order total:</span> <span class="lead fw-normal">$799</span>
                </p>
              </div>
  
            </div>
          </div>
  
          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-light btn-lg me-2">Continue shopping</button>
            <button type="button" class="btn btn-primary btn-lg">Add to cart</button>
          </div>
  
        </div>
      </div>
    </div>
  </section>
  <table id="cart" class="table table-hover table-condensed">

    <thead>

        <tr>

            <th style="width:50%">Product</th>

            <th style="width:10%">Price</th>

            <th style="width:8%">Quantity</th>

            <th style="width:22%" class="text-center">Subtotal</th>

            <th style="width:10%"></th>

        </tr>

    </thead>

    <tbody>

        @php $total = 0 @endphp

        @if(session('cart'))

            @foreach(session('cart') as $id => $details)

                @php $total += $details['price'] * $details['quantity'] @endphp

                <tr data-id="{{ $id }}">

                    <td data-th="Product">

                        <div class="row">

                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>

                            <div class="col-sm-9">

                                <h4 class="nomargin">{{ $details['name'] }}</h4>

                            </div>

                        </div>

                    </td>

                    <td data-th="Price">${{ $details['price'] }}</td>

                    <td data-th="Quantity">

                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />

                    </td>

                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>

                    <td class="actions" data-th="">

                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>

                    </td>

                </tr>

            @endforeach

        @endif

    </tbody>

    <tfoot>

        <tr>

            <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>

        </tr>

        <tr>

            <td colspan="5" class="text-right">

                <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>

                <button class="btn btn-success">Checkout</button>

            </td>

        </tr>

    </tfoot>

</table>
@endsection
