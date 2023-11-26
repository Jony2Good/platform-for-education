<?php


use App\Http\Controllers\Parent\RegisterParentController;
use App\Http\Controllers\School\RegisterSchoolController;
use App\Http\Controllers\Student\RegisterStudentController;
use App\Http\Controllers\Teacher\RegisterTeacherController;
use App\Http\Controllers\Teacher\TeacherController;
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
    Route::get('/school/admin/show', [RegisterSchoolController::class, 'show'])->name('school.show');
    Route::get('/school/admin/teachers', [RegisterSchoolController::class, 'showTeachers'])->name('school.show.teachers');
    Route::get('/school/admin/news', [RegisterSchoolController::class, 'showNews'])->name('school.show.news');
    Route::get('/school/admin/news/add', [RegisterSchoolController::class, 'showNews'])->name('school.show.news.add');
    Route::get('/school/admin/jornal', [RegisterSchoolController::class, 'showJornal'])->name('school.show.jornal');
    Route::get('/school/admin/lessons', [RegisterSchoolController::class, 'addLessons'])->name('school.show.lessons');
    Route::get('/school/admin/students', [RegisterSchoolController::class, 'showStudents'])->name('school.show.students');
    Route::get('/school/admin/add/student', [RegisterSchoolController::class, 'addStudents'])->name('school.add.student');
    Route::get('/school/admin/add/teacher', [RegisterSchoolController::class, 'addTeacher'])->name('school.add.teacher');
    Route::post('/school/admin/add/teacher', [RegisterSchoolController::class, 'storeTeacher'])->name('school.store.teacher');
    Route::get('/school/admin/list', [RegisterSchoolController::class, 'showStudentsList'])->name('school.students.list');


});


Route::group(['namespace' => 'App\Http\Controllers\Teacher'], function () {
    Route::get('/teacher', [RegisterTeacherController::class, 'create'])->name('teacher');
    Route::post('/teacher', [RegisterTeacherController::class, 'store']);
    Route::get('/teacher/admin', [RegisterTeacherController::class, 'index'])->name('teacher.admin');
    Route::get('/teacher/admin/list', [RegisterTeacherController::class, 'createList'])->name('teacher.list');
    Route::get('/teacher/admin/journal', [RegisterTeacherController::class, 'show'])->name('teacher.journal');
    Route::get('/teacher/admin/show', [RegisterTeacherController::class, 'showStudent'])->name('teacher.show');
    Route::get('/teacher/admin/edit/journal', [RegisterTeacherController::class, 'editJournal'])->name('teacher.edit.journal');
    Route::get('/teacher/admin/add', [RegisterTeacherController::class, 'add'])->name('teacher.add.student');
    Route::get('/teacher/admin/news', [RegisterTeacherController::class, 'showNews'])->name('teacher.show.news');
    Route::get('/teacher/admin/massage', [RegisterTeacherController::class, 'createMsg'])->name('teacher.create.message');
    Route::get('/teacher/admin/addNews', [RegisterTeacherController::class, 'createNews'])->name('teacher.create.news');
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

