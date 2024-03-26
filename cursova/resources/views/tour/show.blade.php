@extends('layouts.user_type.auth')

@section('content')
<div class="card-header pb-0">
    <div class="d-flex flex-row justify-content-between">
      <div>
        <h5 class="mb-0">Тур #{{$tour -> id}}</h5>
      </div>
        <a href="{{route('tours')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">Назад</a>
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
                  Статус
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Опис туру
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Фото
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Категорія
                </th>
              </tr>
            </thead>
            <tbody>
  
                <tr>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{$tour->name}}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$tour->price}}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$tour->days}}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">
                      @if($tour->status == 1)
                        <span class="badge badge-sm bg-gradient-success">Активний</span>
                      @else
                        <span class="badge badge-sm bg-gradient-danger">Не активний</span>
                      @endif
                    </p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$tour->description}}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">
                      @if($tour->image)
                      <img src="{{ asset('/storage/' . $tour->image)}}" style="width: 100px; height: 100px" >
                      @else
                        <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" style="width: 100px;">
                      @endif
                    </p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">
                        {{$tour->category_name}}
                    </p>
                  </td>


                </tr>
              
            </tbody>
          </table>
      </div>
 </div>
@endsection