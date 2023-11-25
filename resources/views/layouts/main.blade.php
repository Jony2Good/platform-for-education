<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page title -->
    <title>@yield('page.title', config('app.name'))</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}} ">
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Scripts -->
    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/loader.js')}}"></script>
</head>
<body class="container m-auto pt-5 vh-100">
<div class="d-flex flex-column align-items-center justify-content-center rounded">
    <h1 class="mb-3">Вход в систему</h1>
    <ul class="list-group w-25">
        <li class="list-group-item mb-3 text-center">
            <a class="nav-link" href="{{ route('school') }}">{{ __('Админ') }}</a></li>
        <li class="list-group-item mb-3 text-center">
            <a class="nav-link" href="{{ route('parent') }}"
               aria-haspopup="true" aria-expanded="false">{{ __('Родитель') }}</a></li>
        <li class="list-group-item text-center"><a class="nav-link" href="{{ route('teacher') }}">{{ __('Преподаватель') }}</a>
        </li>
    </ul>
</div>
<!-- Scripts -->
<script src="{{asset('assets/vendors/popper.js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendors/aos/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>
</html>
