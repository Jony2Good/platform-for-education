@extends('admin.layouts.main')
@section('content')
    <div class="container m-auto">
        <div class="container-fluid p-0">
            <div class="row">
                <main class="col-sm-10 col-md-9 ms-sm-auto col-lg-10 col-xl-9">
                    <div class="content bg-light schedule m-xs-0 p-xs-0 m-sm-0 p-sm-0 p-xl-5 mt-xl-3 rounded-3">
                        <h2 class="fw-bold">Расписание</h2>
                        <div class="schedule-actions d-flex align-items-center justify-content-between">
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
                            <a href="{{ route("school.show.lessons") }}" class="btn btn-primary">Добавить урок</a>
                        </div>
                        <div class="table-responsive mt-4 table-container">
                            <table class="table table-bordered text-center">
                                <thead class="table-white bg-white table__heading">
                                <tr class="align-middle">
                                    <th scope="col" class=""></th>
                                    <th scope="col" class="col-1 p-3">20.11 <br> Пн</th>
                                    <th scope="col" class="col-1 p-3">21.11 <br> Вт</th>
                                    <th scope="col" class="col-1 p-3">22.11 <br> Ср</th>
                                    <th scope="col" class="col-1 p-3">23.11 <br> Чт</th>
                                    <th scope="col" class="col-1 p-3">24.11 <br> Пт</th>
                                    <th scope="col" class="col-1 p-3">25.11 <br> Сб</th>
                                    <th scope="col" class="col-1 p-3">26.11 <br> Вс</th>
                                    <th scope="col" class="col-1 p-3">27.11 <br> Пн</th>
                                    <th scope="col" class="col-1 p-3">28.11 <br> Вт</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="align-middle">
                                    <th scope="row" class="grade">3 кл</th>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3"></td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3"></td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row" class="grade">4 кл</th>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3"></td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3"></td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row" class="grade">2 кл</th>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3"></td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3"></td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                    <td class="table-item p-3">
                                        <p>16:30 — 17:10</p>
                                        <div class="name">Григорьева Е. к.205</div>
                                        <div class="subject">Спец-ть</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
