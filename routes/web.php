<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ActionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Courses\CourseController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\GestionUserController;
use App\Http\Controllers\Admin\GestionCouponController;
use App\Http\Controllers\Admin\GestionCourseController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Formateur\FormateurController;
use App\Http\Controllers\Admin\GestionCategoryController;
use App\Http\Controllers\Admin\GestionFormateurController;

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

Route::resource('courses', CourseController::class);



Route::get('/', function () {
    return view('welcome');
});

//routes liées à l'authentification
Route::get('/sucess/{name}', [ActionController::class, 'registerSuccess'])->name('register.sucess');
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/post/user', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/User', [LoginController::class, 'loginForUser'])->name('post.login');
Route::get('/profiles', [DashboardController::class, 'index'])->name('dashboard.users');
Route::get('/become-teacher-mangement', [FormateurController::class, 'createNewFormateur'])->name('create.new.formateur');
Route::post('/createNewTeacher', [FormateurController::class, 'store'])->name('post.new.formateur');


Route::get('/admin-dashboard', [HomeAdminController::class, 'homeAdmin'])->name('admin.dashboard');

Route::get('/users-all-section', [GestionUserController::class, 'index'])->name('admin.all.users');

Route::get('/formateurs/liste/active/true', [GestionFormateurController::class, 'enableTeacher'])->name('admin.teacher.enable');
Route::get('/formateurs/liste/active/false', [GestionFormateurController::class, 'disableTeacher'])->name('admin.teacher.disable');

Route::get('/formateurs/view/profile/{id}', [GestionFormateurController::class, 'show'])->name('formateur.view');
Route::get('/formateur/update-status', [GestionFormateurController::class, 'confirmatedCandidature'])->name('update.candidature');
Route::post('/sendNotificationTest',  [GestionFormateurController::class, 'sendNotificationTest'])->name('test.confirmed');


Route::resources([
    'category' => GestionCategoryController::class,
    'coupon' => GestionCouponController::class,
]);



Route::get('/all-courses', [GestionCourseController::class, 'allCourse'])->name('all.admin.course');
Route::get('/course/detail/{id}', [GestionCourseController::class, 'show'])->name('admin.course.show');


