@extends('teacher.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Написать в администрацию школы')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">{{__('На главную')}}</a></li>
                            <li class="breadcrumb-item"><a href="">{{__('Назад')}}</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="card-body">
                            <div class="form-group mb-3 col-3">
                                <label for="title">{{__('Название сообщения')}}</label>
                                <input type="text" name="title" id="title"
                                       class="form-control mb-2"
                                       placeholder="{{__('Введите название')}}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-3">
                                <label for="category">{{__('Категория')}}</label>
                                <select class="select2" id="category" multiple="multiple" name="category[]" data-placeholder="{{__('Выберите категория')}}" style="width: 100%;">
                                    <option disabled selected hidden>{{__('Без категории')}}</option>
                                      <option >{{ __("Учеба") }}</option>
                                      <option >{{ __("Происшествие") }}</option>
                                      <option >{{ __("Отпуск") }}</option>

                                </select>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <div class="form-group mb-3 col-6">
                                <label for="summernote">{{__('Содержание сообщения')}}</label>
                                <textarea class="form-control mb-2 @error('content') is-invalid @enderror"
                                          id="summernote" name="content"></textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('Отправить')}}</button>
                </form>
            </div>
        </section>
    </div>
@endsection
