

@extends('layouts.user_type.auth')

@section('content')
 <div class="card-header pb-0">
    <div class="d-flex flex-row justify-content-between">
      <div>
        <h5 class="mb-0">Пости</h5>
      </div>
        <a href="{{route('post.create')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Додати пост</a>
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
                  Опис поста
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Дії
                </th>
              </tr>
            </thead>
            <tbody>

              @foreach($posts as $post)
                <tr>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{$post->name}}</p>
                  </td>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{Str::limit($post->description, 15, '...')}}</p>
                  </td>
                  <td>
                   <div class="d-flex gap-3">
                    <a href="{{ route('post.edit', $post->id) }}" class="mx-1" data-bs-toggle="tooltip" data-bs-original-title="Edit post">
                     <i class="fas fa-edit text-secondary"></i>
                    </a>
                    <a href="{{ route('post.show', $post->id) }}" class="mx-1" data-bs-toggle="tooltip" data-bs-original-title="View post">
                     <i class="fas fa-search text-primary"></i>
                    </a>
                    <form  action="{{ route('post.destroy', $post->id) }}" method="post">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="mx-1" data-bs-toggle="tooltip" data-bs-original-title="Delete post" style="background: none; border: none;">
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