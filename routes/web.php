<?php


use App\Http\Controllers\Parent\RegisterParentController;
use App\Http\Controllers\School\RegisterSchoolController;
use App\Http\Controllers\Student\RegisterStudentController;
use App\Http\Controllers\Teacher\RegisterTeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//главная страница
Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('home');
});


Route::group(['namespace' => 'App\Http\Controllers\School'], function () {
    Route::get('/school', [RegisterSchoolController::class, 'create'])->name('school');
    Route::post('/school', [RegisterSchoolController::class, 'store']);
    Route::get('/school/admin', [RegisterSchoolController::class, 'index'])->name('school.admin');

});


Route::group(['namespace' => 'App\Http\Controllers\Teacher'], function () {
    Route::get('/teacher', [RegisterTeacherController::class, 'create'])->name('teacher');
    Route::post('/teacher', [RegisterTeacherController::class, 'store']);
    Route::get('/teacher/admin', [RegisterTeacherController::class, 'index'])->name('teacher.admin');

});



Route::group(['namespace' => 'App\Http\Controllers\Parent'], function () {
    Route::get('/parent', [RegisterParentController::class, 'create'])->name('parent');
    Route::post('/parent', [RegisterParentController::class, 'store']);
    Route::get('/parent/student', [RegisterParentController::class, 'index'])->name('parent.student');;

});



Route::group(['namespace' => 'App\Http\Controllers\Student'], function () {
    Route::get('/student', [RegisterStudentController::class, 'create'])->name('student');
    Route::post('/student', [RegisterStudentController::class, 'store']);

});


Auth::routes(['verify' => true]);

