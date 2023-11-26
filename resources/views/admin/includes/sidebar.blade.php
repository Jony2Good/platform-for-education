<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <nav class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('school.admin') }}" class="d-block"> Администратор
                </a>
            </div>
        </div>
        <div class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">{{__('Каталог')}}</li>
                <li class="nav-item">
                    <a href="{{ route('school.show') }}" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            {{__('Рабочие задачи')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('school.show.jornal') }}" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            {{__('Рассписание уроков')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('school.show.teachers') }}" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            {{__('Преподаватели')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('school.show.students') }}" class="nav-link">
                        <i class="nav-icon fa fa-list" aria-hidden="true"></i>
                        <p>
                            {{__('Ученики')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('school.show.news') }}" class="nav-link">
                        <i class="nav-icon fa fa-tags"></i>
                        <p>
                            {{__('Новости')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-comments"></i>
                        <p>
                            {{__('Настройки')}}
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>

