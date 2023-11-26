@extends('teacher.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Список учеников')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href=''></a>На главную</li>
                            <li class="breadcrumb-item"><a href="">Назад</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 mb-3"><a href="{{ route('teacher.add.student') }}"
                                               class="btn btn-block btn-primary">Добавить нового ученика</a></div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{__('Список учеников')}}</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="{{__('Поиск')}}">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr class="text-center">
                                        <th>{{__('Номер')}}</th>
                                        <th>{{__('класс')}}</th>
                                        <th class="th" id="1">{{__('Фамилия')}}</th>
                                        <th class="th" id="2">{{__('Имя')}}</th>
                                        <th class="text-center">{{__('Успеваемость')}}</th>
                                        <th>{{__('Телефон родителя')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $data as $item)
                                        <tr class="text-center">
                                            <td>{{$item['id']}}</td>
                                            <td>{{$item['class']}}</td>
                                            <td>{{$item['surname']}}</td>
                                            <td>{{$item['name']}}</td>
                                            <td class="text-center">{{$item['study']}}</td>
                                            <td>{{$item['phone']}}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('teacher.show') }}"><i
                                                        class="far fa-eye mr-2"></i></a>
                                                <a class="text-success"
                                                   href=""><i
                                                        class="fas fa-pencil-alt mr-2"></i></a>
                                                <form action="" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="border-0 text-danger bg-transparent" type="submit">
                                                        <i class="far fa-times-circle"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
