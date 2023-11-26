@extends('teacher.layouts.main')
@section('content')
    <div class="container m-auto">
        <div class="row">
            <main class="col-sm-10 col-md-9 col-lg-10 col-xl-9">
                <div class="content bg-light schedule m-xs-0 p-xs-0 m-sm-0 p-sm-0 p-xl-5 mt-xl-3 rounded-3">
                    <h2 class="fw-bold mb-4">Добавить новость</h2>
                    <section class="content">
                        <div class="container-fluid">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="card-body">
                                        <div class="form-group mb-3 col-4">
                                            <label for="post-title">{{__('Введите название')}}</label>
                                            <input type="text" name="title" id="post-title"
                                                   class="form-control mb-2"
                                                   placeholder="{{__('Введите название новости')}}">
                                            @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3 col-4">
                                            <label for="category">{{__('Выберетие категорию')}}</label>
                                            <select class="form-control" name="category_id" id="category">
                                                <option disabled selected hidden>{{__('Не выбрано')}}</option>
                                                <option>О школе</option>
                                                <option>Об учениках</option>
                                                <option>О мероприятиях</option>
                                            </select>
                                            @error('category_id')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="card-body">
                                        <div class="form-group mb-3 col-6">
                                            <label for="summernote">{{__('О чем будет новость?')}}</label>
                                            <textarea class="form-control mb-2 @error('content') is-invalid @enderror"
                                                      id="summernote" name="content"></textarea>
                                            @error('content')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                    <div>
                                <button type="submit" class="btn btn-primary">{{__('Добавить')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>
@endsection
