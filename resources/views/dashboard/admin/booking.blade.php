@extends('dashboard.admin.masteradmin')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Card Number </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Phone </th>
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
                  {{-- <p class="text-sm font-weight-bold mb-0">{{ $item->phone }}</p> --}}
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
                  <a class="btn btn-outline-primary btn-sm mb-0" href={{ route('admin.book.edit',$item->id) }}><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                </td>
                  <td class="align-middle">
                  <form action="{{ route('admin.book.destroy',$item->id) }}" method="post">
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
@endsection
