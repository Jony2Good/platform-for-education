<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <a class="navbar-brand" href="#">Образовательная платформа</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="edicaMainNav">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">{{ __('Главная страница') }}<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('school') }}">{{ __('Школе') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teacher') }}"
                       aria-haspopup="true" aria-expanded="false">{{ __('Учителям') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('parent') }}"
                       aria-haspopup="true" aria-expanded="false">{{ __('Родителям') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('student') }}"
                       aria-haspopup="true" aria-expanded="false">{{ __('Ученику') }}</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
