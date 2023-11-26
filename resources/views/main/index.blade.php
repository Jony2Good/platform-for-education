@extends('layouts.main')

@section('content')
    <main class="main">
        <section class="vh-100">
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('school') }}">{{ __('Админ') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teacher') }}"
                           aria-haspopup="true" aria-expanded="false">{{ __('Преподаватель') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('parent') }}"
                           aria-haspopup="true" aria-expanded="false">{{ __('Родитель') }}</a>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection


