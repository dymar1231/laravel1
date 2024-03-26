
@extends('layouts.user_type.auth')

@section('content')
 <div class="card-header pb-0">
    <div class="d-flex flex-row justify-content-between">
      <div>
        <h5 class="mb-0">Замовлення #{{$order -> id}}</h5>
      </div>
        <a href="{{route('orders')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">Назад</a>
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
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Ціна туру
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Тривалість туру
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Номер телефону
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Електронна пошта
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Повне ім'я
                </th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{$order->tour_name}}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$order->price}}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$order->days}}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$order->phone_number}}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$order->email}}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$order->fullname}}</p>
                  </td>
                </tr>

              
            </tbody>
          </table>
      </div>
 </div>


@endsection