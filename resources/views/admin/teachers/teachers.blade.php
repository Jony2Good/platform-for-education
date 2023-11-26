@extends('admin.layouts.main')
@section('content')
    <div class="container m-auto">
        <div class="row">
            <main class="col-sm-10 col-md-9 ms-sm-auto col-lg-10 col-xl-9">
                <div class="content bg-light schedule m-xs-0 p-xs-0 m-sm-0 p-sm-0 p-xl-5 mt-xl-3 rounded-3">
                    <h2 class="fw-bold mb-4">Преподаватели</h2>
                    <div class="schedule-actions d-flex justify-content-between flex-row">
                        <a href="{{ route('school.add.teacher') }}" class="btn btn-primary mb-4">Добавить
                            преподавателя</a>
                    </div>
                    <div class="d-flex">
                    <div class="card mr-3" style="width: 18rem;">
                        <div class="card-body d-flex flex-column">
                            <img src="..." class="card-img-top" alt="...">
                            <h5 class="card-title mb-3">Иванов иван Иванович</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Преподаватель по вокалу</h6>
                            <p class="card-text">Небольшой пример текста, который должен основываться на названии карты
                                и составлять основную часть содержимого карты.</p>
                            <div>
                                <a href="#" class="card-link text-success">Редактировать</a>
                                <a href="#" class="card-link text-danger">Удалить</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mr-3" style="width: 18rem;">
                        <div class="card-body d-flex flex-column">
                            <img src="..." class="card-img-top" alt="...">
                            <h5 class="card-title mb-3">Иванов иван Иванович</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Преподаватель по вокалу</h6>
                            <p class="card-text">Небольшой пример текста, который должен основываться на названии карты
                                и составлять основную часть содержимого карты.</p>
                            <div>
                                <a href="#" class="card-link text-success">Редактировать</a>
                                <a href="#" class="card-link text-danger">Удалить</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mr-3" style="width: 18rem;">
                        <div class="card-body d-flex flex-column">
                            <img src="..." class="card-img-top" alt="...">
                            <h5 class="card-title mb-3">Иванов иван Иванович</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Преподаватель по вокалу</h6>
                            <p class="card-text">Небольшой пример текста, который должен основываться на названии карты
                                и составлять основную часть содержимого карты.</p>
                            <div>
                                <a href="#" class="card-link text-success">Редактировать</a>
                                <a href="#" class="card-link text-danger">Удалить</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
