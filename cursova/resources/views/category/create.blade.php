@extends('layouts.user_type.auth')

@section('content')

 <div class="card-header pb-0">
    <div class="d-flex flex-row justify-content-between">
      <div>
        <h5 class="mb-0">Створення туру</h5>
      </div>
        <a href="{{route('category')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">Назад</a>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body pt-4 p-3">
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" role="form text-left">
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

                    @if(session('error'))
                        <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{ session('error') }}</span>
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






                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Назва категорії</label>
                            <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="text" placeholder="Назва категорії" name="name">
                                    @error('name')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            </div>
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