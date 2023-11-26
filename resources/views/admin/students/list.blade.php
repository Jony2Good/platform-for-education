@extends('admin.layouts.main')
@section('content')
    <div class="container m-auto">
        <div class="row">
            <main class="col-sm-10 col-md-9 col-lg-10 col-xl-9">
                <div class="content news bg-light schedule m-xs-0 p-xs-0 m-sm-0 p-sm-0 p-xl-5 mt-xl-3 rounded-3">
                    <h2 class="fw-bold mb-4">Ученики</h2>
                    <div class="news-actions d-flex align-items-start justify-content-between">
                        <div class="news-search position-relative">
                            <input type="text" placeholder="Поиск">
                            <button class="search-btn position-absolute end-0 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <path
                                        d="M21.5308 20.4696L16.8368 15.7765C18.1973 14.1431 18.8757 12.048 18.7309 9.92715C18.5861 7.80629 17.6293 5.82289 16.0593 4.38956C14.4894 2.95623 12.4274 2.18333 10.3021 2.23163C8.17687 2.27993 6.15205 3.14571 4.64888 4.64888C3.14571 6.15205 2.27993 8.17687 2.23163 10.3021C2.18333 12.4274 2.95623 14.4894 4.38956 16.0593C5.82289 17.6293 7.80629 18.5861 9.92715 18.7309C12.048 18.8757 14.1431 18.1973 15.7765 16.8368L20.4696 21.5308C20.5393 21.6005 20.622 21.6558 20.713 21.6935C20.8041 21.7312 20.9017 21.7506 21.0002 21.7506C21.0988 21.7506 21.1963 21.7312 21.2874 21.6935C21.3784 21.6558 21.4612 21.6005 21.5308 21.5308C21.6005 21.4612 21.6558 21.3784 21.6935 21.2874C21.7312 21.1963 21.7506 21.0988 21.7506 21.0002C21.7506 20.9017 21.7312 20.8041 21.6935 20.713C21.6558 20.622 21.6005 20.5393 21.5308 20.4696ZM3.75021 10.5002C3.75021 9.16519 4.14609 7.86015 4.88779 6.75011C5.62949 5.64008 6.6837 4.77492 7.9171 4.26403C9.1505 3.75314 10.5077 3.61946 11.8171 3.87991C13.1264 4.14036 14.3292 4.78324 15.2732 5.72724C16.2172 6.67125 16.8601 7.87398 17.1205 9.18335C17.381 10.4927 17.2473 11.8499 16.7364 13.0833C16.2255 14.3167 15.3603 15.3709 14.2503 16.1126C13.1403 16.8543 11.8352 17.2502 10.5002 17.2502C8.71061 17.2482 6.99488 16.5364 5.72944 15.271C4.464 14.0056 3.7522 12.2898 3.75021 10.5002Z"
                                        fill="black" fill-opacity="0.35"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <div>
                            <div>
                                <h2>Класс 1</h2>
                            </div>
                            <div class="card mr-3" style="width: 18rem;">
                                <div class="card-body d-flex flex-column">
                                    <img src="..." class="card-img-top" alt="...">
                                    <h5 class="card-title mb-3">Иванов иван Иванович</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">преподаватель Федоров Александр</h6>
                                    <p class="card-text">Кружок по вокалу</p>
                                    <p class="card-text">Общая успеваемость 4</p>
                                    <div>
                                        <a href="#" class="card-link text-success">Редактировать</a>
                                        <a href="#" class="card-link text-danger">Удалить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mr-3" style="width: 18rem;">
                                <div class="card-body d-flex flex-column">
                                    <img src="..." class="card-img-top" alt="...">
                                    <h5 class="card-title mb-3">Сидоров Петр Петрович</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">5 класс</h6>
                                    <p class="card-text">класс скрипка</p>
                                    <p class="card-text">Общая успеваемость 4</p>
                                    <div>
                                        <a href="#" class="card-link text-success">Редактировать</a>
                                        <a href="#" class="card-link text-danger">Удалить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mr-3" style="width: 18rem;">
                                <div class="card-body d-flex flex-column">
                                    <img src="..." class="card-img-top" alt="...">
                                    <h5 class="card-title mb-3">Сидоров Петр Петрович</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">5 класс</h6>
                                    <p class="card-text">класс скрипка</p>
                                    <p class="card-text">Общая успеваемость 4</p>
                                    <div>
                                        <a href="#" class="card-link text-success">Редактировать</a>
                                        <a href="#" class="card-link text-danger">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2>Класс 2</h2>
                            </div>
                            <div class="card mr-3" style="width: 18rem;">
                                <div class="card-body d-flex flex-column">
                                    <img src="..." class="card-img-top" alt="...">
                                    <h5 class="card-title mb-3">Иванов иван Иванович</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">преподаватель Федоров Александр</h6>
                                    <p class="card-text">Кружок по вокалу</p>
                                    <p class="card-text">Общая успеваемость 4</p>
                                    <div>
                                        <a href="#" class="card-link text-success">Редактировать</a>
                                        <a href="#" class="card-link text-danger">Удалить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mr-3" style="width: 18rem;">
                                <div class="card-body d-flex flex-column">
                                    <img src="..." class="card-img-top" alt="...">
                                    <h5 class="card-title mb-3">Сидоров Петр Петрович</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">5 класс</h6>
                                    <p class="card-text">класс скрипка</p>
                                    <p class="card-text">Общая успеваемость 4</p>
                                    <div>
                                        <a href="#" class="card-link text-success">Редактировать</a>
                                        <a href="#" class="card-link text-danger">Удалить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mr-3" style="width: 18rem;">
                                <div class="card-body d-flex flex-column">
                                    <img src="..." class="card-img-top" alt="...">
                                    <h5 class="card-title mb-3">Сидоров Петр Петрович</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">5 класс</h6>
                                    <p class="card-text">класс скрипка</p>
                                    <p class="card-text">Общая успеваемость 4</p>
                                    <div>
                                        <a href="#" class="card-link text-success">Редактировать</a>
                                        <a href="#" class="card-link text-danger">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
    </div>
    </main>
    </div>
    </div>
@endsection
