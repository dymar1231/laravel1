

@extends('layouts.user_type.auth')

@section('content')
<div class="card-header pb-0">
    <div class="d-flex flex-row justify-content-between">
      <div>
        <h5 class="mb-0">Пост #{{$post -> id}}</h5>
      </div>
        <a href="{{route('posts')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">Назад</a>
    </div>
 </div>
 <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Назва поста
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  опис поста
                </th>
                </th>
              </tr>
            </thead>
            <tbody>
  
              <tr>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{$post->name}}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$post->description}}</p>
                  </td>
              </tr>

              
            </tbody>
          </table>
      </div>
 </div>
@endsection