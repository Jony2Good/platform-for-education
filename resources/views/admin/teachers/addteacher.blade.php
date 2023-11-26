@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Добавить преподавателя')}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{ route('school.store.teacher') }}" method="post" class="w-25" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="name">{{__('Имя')}}</label>
                                <input type="text" name="name" id="name"
                                       class="form-control mb-2 @error('name') is-invalid @enderror"
                                       placeholder="Имя преподавателя">
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="f">{{__('Фамилия')}}</label>
                                <input type="text" name="first_name" id="f"
                                       class="form-control mb-2 @error('name') is-invalid @enderror"
                                       placeholder="Фамилия">
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">{{__('Электронная почта')}}</label>
                                <input type="text" name="email" id="email"
                                       class="form-control mb-2 @error('email') is-invalid @enderror"
                                       placeholder="Электронная почта">
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="role">{{__('Выберите должность')}}</label>
                                <select class="form-control @error('role') is-invalid @enderror" name="role" id="role">
                                    <option disabled selected hidden>{{__('Нет должности')}}</option>
                                    <option value="22">{{__('классный руководитель')}}</option>
                                    <option value="23">{{__('концертмейстер')}}</option>
                                </select>
                                @error('role')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-10">
                                <label for="main_image">{{__('Добавить изображение')}}</label>
                                <div class="input-group ">
                                    <div class="custom-file">
                                        <input name="main_image" type="file" class="custom-file-input" id="main_image">
                                        <label class="custom-file-label"
                                               for="main_image">{{__('Добавить изображение')}}</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">{{__('Добавить')}}</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                         <button type="submit" class="btn btn-primary">{{__('Добавить')}}</button>
                       </form>
                </div>
            </div>
        </section>
    </div>
@endsection
