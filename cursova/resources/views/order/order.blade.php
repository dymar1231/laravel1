

@extends('layouts.user_type.auth')

@section('content')
 <div class="card-header pb-0">
    <div class="d-flex flex-row justify-content-between">
      <div>
        <h5 class="mb-0">Замовлення</h5>
      </div>
        <a href="{{route('orders.create')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Додати замовлення</a>
    </div>
 </div>
 <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Назва туру
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Ціна
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Кількість днів
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Номер телефону
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Email
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Повне ім'я
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Дії
                </th>
              </tr>
            </thead>
            <tbody>

              @foreach($orders as $order)
                <tr>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{$order->tour_name}}</p>
                  </td>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{$order->price}}</p>
                  </td>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{$order->days}}</p>
                  </td>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{$order->phone_number}}</p>
                  </td>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{$order->email}}</p>
                  </td>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{$order->fullname}}</p>
                  </td>
                  <td class="ps-4">
                   <div class="d-flex gap-3">
                    <a href="{{ route('orders.edit', $order->id) }}" class="mx-1" data-bs-toggle="tooltip" data-bs-original-title="Edit order">
                     <i class="fas fa-edit text-secondary"></i>
                    </a>
                    <a href="{{ route('orders.show', $order->id) }}" class="mx-1" data-bs-toggle="tooltip" data-bs-original-title="View order">
                     <i class="fas fa-search text-primary"></i>
                    </a>
                    <form  action="{{ route('orders.destroy', $order->id) }}" method="post">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="mx-1" data-bs-toggle="tooltip" data-bs-original-title="Delete order" style="background: none; border: none;">
                     <i class="fas fa-trash text-danger"></i>
                     </button>
                    </form>
                   </div>
                  </td>

                </tr>
              @endforeach
              
            </tbody>
          </table>
      </div>
 </div>


@endsection