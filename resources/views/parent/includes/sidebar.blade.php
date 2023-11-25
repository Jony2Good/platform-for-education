<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <nav class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> {{ $name }}</a>
            </div>
        </div>
        <div class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">{{__('Календарь')}}</li>
                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            {{__('Учителя')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users') }}" class="nav-link">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            {{__('Школьники')}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.categories') }}" class="nav-link">
                        <i class="nav-icon fa fa-list" aria-hidden="true"></i>
                        <p>
                            {{__('Учебный процесс')}}
                        </p>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>

