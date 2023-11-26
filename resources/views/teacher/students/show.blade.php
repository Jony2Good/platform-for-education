@extends('teacher.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header ml-5">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Ученик')}}</h1>
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
        <section class="row ml-5">
            <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('assets/images/first.jpg') }}" class="card-img-top" alt="картинка">
                <div class="card-body">
                    <h5 class="card-title mb-3">Иванова Мария</h5>
                    <p class="card-text ">1 А класс</p>
                    <p class="card-text">Успеваемость: 3.5</p>
                    <a href="#" class="btn btn-danger">Родитель 8917-XXX-XX-XX</a>
                </div>
            </div>
            </div>
        </section>
        <div class="row">
            <main class="col-sm-10 col-md-9 ms-sm-auto col-lg-10 col-xl-9 p-0">
                <div class="news content bg-light m-xs-0 m-sm-0 p-5 my-xl-4 rounded-3">
                    <h2 class="fw-bold mb-4">Электронный дневник</h2>
                    <div class="d-flex align-items-start justify-content-between flex-wrap">
                        <div class="select" data-state="">
                            <div class="select__title" data-default="Option 0">
                                <div class="select__title-text">Ноябрь 2023</div>
                                <div class="select__arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9037 7C11.0733 7 11.1659 7.19777 11.0574 7.32804L8.15104 10.8156C8.07108 10.9116 7.92371 10.9116 7.84375 10.8156L4.93743 7.32804C4.82887 7.19777 4.9215 7 5.09107 7H10.9037Z" fill="#A9A9A9"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="select__content">
                                <input id="11" class="select__input" type="radio"/>
                                <label for="11" class="select__label">Ноябрь 2023</label>
                                <input id="12" class="select__input" type="radio"/>
                                <label for="12" class="select__label">Декабрь 2023</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-start justify-content-between flex-wrap flex-lg-row">
                        <div>
                            <span class="me-5">Оценка — 1,2,3,4,5</span>
                            <span class="me-5">Пропуск —</span>
                            <span class="me-5">Загружено дз —</span>
                        </div>
                        <div>
                            <a class="text-success"
                               href="{{ route('teacher.edit.journal') }}"><i class="fas fa-pencil-alt mr-2"></i></a></div>
                    </div>
                    <div class="table-responsive mt-3 table-container journal">
                        <table class="table table-bordered text-center bg-white align-middle">
                            <tr>
                                <td rowspan="2"></td>
                                <td colspan="9" class="fw-bold text-start ps-3">Ноябрь 2023</td>
                                <td colspan="3" class="fw-bold text-start ps-3">Декабрь 2023</td>
                            </tr>
                            <tr>
                                <td class="table-item p-3 col-1 h-auto">
                                    02
                                </td>
                                <td class="table-item p-3 col-1">
                                    06
                                </td>
                                <td class="table-item p-3 col-1">
                                    09
                                </td>
                                <td class="table-item p-3 col-1">
                                    13
                                </td>
                                <td class="table-item p-3 col-1">
                                    16
                                </td>
                                <td class="table-item p-3 col-1">
                                    20
                                </td>
                                <td class="table-item p-3 col-1">
                                    23
                                </td>
                                <td class="table-item p-3 col-1">
                                    27
                                </td>
                                <td class="table-item p-3 col-1">
                                    30
                                </td>
                                <td class="table-item p-3 col-1">
                                    02
                                </td>
                                <td class="table-item p-3 col-1">
                                    06
                                </td>
                                <td class="table-item p-3 col-1">
                                    09
                                </td>
                            </tr>
                            <tr>
                                <td class="col subject w-25 text-nowrap fw-bold">Специальность</td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 absent">
                                    X
                                </td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light">
                                    4
                                </td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light">
                                    4
                                </td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                            </tr>
                            <tr>
                                <td class="col subject w-25 text-nowrap fw-bold">Музыкальная лит-ра</td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light">
                                    4
                                </td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 absent">X</td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                            </tr>
                            <tr>
                                <td class="col subject w-25 text-nowrap fw-bold">Сольфеджио</td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light">
                                    4
                                </td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light position-relative">
                                    4/4
                                    <div class="mark position-absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                                            <circle cx="3" cy="3" r="3" fill="#0084E4"/>
                                        </svg>
                                    </div>
                                </td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                                <td class="table-item p-3 col-1 bg-light"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
