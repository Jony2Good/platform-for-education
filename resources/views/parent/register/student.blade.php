<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Форма регистрации родитель/ученик</title>
</head>
<body>
<section class="pt-5">
<div class="login row d-flex login-add">
    <div class="mx-auto align-middle m-auto p-5 bg-white rounded-4 col-xs-11 col-sm-10 col-md-9 col-lg-7 col-xl-5">
        <h2 class="fw-bold text-center">Вход в систему</h2>
        <div class="login__block d-flex gap-1 mt-4">
            <div class="col-6 p-4 border border-light rounded-2">
                <form>
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Введите логин и пароль, которым Вам выдал учитель</p>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="login">Логин</label>
                        <input type="text" name="phone" id="login" class="form-control form-control-lg"
                               placeholder="Телефон"/>
                        <input class="hidden" type="hidden" name="role" value="4">
                    </div>
                    <div class="form-outline mb-3">
                        <label class="form-label" for="pass">Пароль</label>
                        <input type="password" name="password" id="pass" class="form-control form-control-lg"
                               placeholder="Пароль"/>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg mb-3"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">ВОЙТИ
                        </button>
                        <a href="#" class="text-body">Забыли пароль?</a>
                    </div>
                </form>
            </div>
            <a href="#" class="add-child-btn col-6 border border-primary rounded-2 d-flex align-items-center justify-content-center">+ Добавить ребенка</a>
        </div>
    </div>
</div>
</section>
</body>
</html>
