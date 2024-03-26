

@extends('layouts.user_type.auth')

@section('content')
 <div class="card-header pb-0">
    <div class="d-flex flex-row justify-content-between">
      <div>
        <h5 class="mb-0">Категорії</h5>
      </div>
        <a href="{{route('category.create')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Додати категорію</a>
    </div>
 </div>
 <div class="card-body px-0 pt-0 pb-2">
      <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Назва категорії
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                  Дії
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
                <tr>
                  <td class="ps-4">
                    <p class="text-xs font-weight-bold mb-0">{{$category->name}}</p>
                  </td>
                  <td>
                   <div class="d-flex gap-3">
                   @if ($category->name != 'Без категорії')
                    <a href="{{ route('category.edit', $category->id) }}" class="mx-1" data-bs-toggle="tooltip" data-bs-original-title="Edit category">
                     <i class="fas fa-edit text-secondary"></i>
                    </a>
                   @endif
                    <a href="{{ route('category.show', $category->id) }}" class="mx-1" data-bs-toggle="tooltip" data-bs-original-title="View category">
                     <i class="fas fa-search text-primary"></i>
                    </a>
                   @if ($category->name != 'Без категорії') 
                    <form  action="{{ route('category.destroy', $category->id) }}" method="post">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="mx-1" data-bs-toggle="tooltip" data-bs-original-title="Delete category" style="background: none; border: none;">
                     <i class="fas fa-trash text-danger"></i>
                     </button>
                    </form>
                   @endif
                   </div>
                  </td>
                </tr>
              @endforeach
              
            </tbody>
          </table>
      </div>
 </div>


@endsection