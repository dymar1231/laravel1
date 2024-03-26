@extends('layouts.user_type.auth')

@section('content')

 <div class="card-header pb-0">
    <div class="d-flex flex-row justify-content-between">
      <div>
        <h5 class="mb-0">Створення туру</h5>
      </div>
        <a href="{{route('tours')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">Назад</a>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body pt-4 p-3">
                <form action="{{ route('tour.store') }}" method="POST" enctype="multipart/form-data" role="form text-left">
                    @csrf

                    @if($errors->any())
                        <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif





                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Назва туру</label>
                                <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Назва туру" name="name">
                                        @error('name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>




                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label">Ціна туру</label>
                                <div class="@error('email')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" placeholder="1000" name="price">
                                        @error('price')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user.phone" class="form-control-label">Тривалість туру</label>
                                <div class="@error('user.phone')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" placeholder="10" name="days">
                                        @error('days')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user.location" class="form-control-label">Категорія</label>
                                <div class="@error('user.location') border border-danger rounded-3 @enderror">
                                    <select class="form-select" name="category_name">
                                        @foreach($categories as $category) 
                                          <option value="{{ $category->name }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="about">Фото туру</label>
                        <div class="@error('image')border border-danger rounded-3 @enderror">
                            <input type="file" name="image" class="form-control" accept=".jpg, .jpeg, .png">
                            @error('image')
                             <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="user.location" class="form-control-label">Категорія</label>
                        <div class="@error('user.location') border border-danger rounded-3 @enderror">
                            <select class="form-select" name="status">
                                <option value="1">Активний</option>
                                <option value="0">Не активний</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="about">Опис туру</label>
                        <div class="@error('user.about')border border-danger rounded-3 @enderror">
                            <textarea class="form-control" rows="3" placeholder="Опис" name="description"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Створити</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection