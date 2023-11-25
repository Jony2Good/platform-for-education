<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<section>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form class="p-5">
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
                        <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">ВОЙТИ
                        </button>
                        <a href="#" class="text-body">Забыли пароль?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <a href="">Добавить ребенка</a>
            </div>
        </div>
    </div>
</section>



</body>
</html>
