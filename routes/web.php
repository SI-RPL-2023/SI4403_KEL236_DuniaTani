<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DetailEventController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DetailCommunityController;
use App\Http\Controllers\CourseController;

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

Route::get('/', [HomeController::class, 'index']);
Route::resource('/course', CourseController::class);
Route::get('/course-checkout/{course}', [CourseController::class, 'displayCourseCheckout']);
Route::post('/course-checkout/{course}', [CourseController::class, 'displayCourseCheckout']);
Route::get('/course-payment/{course}', [CourseController::class, 'displayCoursePayment']);
Route::post('/course-payment/{course}', [CourseController::class, 'PaymentMethod']);
Route::get('/course-checkout-success', [CourseController::class, 'displayCourseSuccess']);
Route::get('/course-video', [CourseController::class, 'accessvideo']);

// route for login register
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// route for user pelajar
Route::get('/user', [UserController::class, 'index']);
Route::put('/user/{user}', [UserController::class, 'update']);
Route::get('/user/order', [UserController::class, 'myorder']);
Route::get('/user/class', [UserController::class, 'myclass']);
Route::get('/user/setting', [UserController::class, 'setting']);
Route::put('/user/setting/{user}', [UserController::class, 'update']);

// route for mentor guru tani
Route::get('/gurutani/addclass', [GuruController::class, 'addclass']);
Route::get('/gurutani/inbox', [GuruController::class, 'myinbox']);
Route::put('/gurutani/inbox/{order}', [GuruController::class, 'update_status']);
Route::get('/gurutani/setting', [GuruController::class, 'setting']);
Route::put('/gurutani/setting/{user}', [GuruController::class, 'update']);

Route::get('/gurutani/login', [GuruController::class, 'loginGuru']);
Route::post('/gurutani/login', [LoginController::class, 'authenticate']);
Route::post('/gurutani/addclass', [CourseController::class, 'store']);
Route::get('/gurutani/editclass', [CourseController::class, 'editclass']);
Route::put('/gurutani/editclass/{course}', [CourseController::class, 'update']);
Route::get('/gurutani/myclass', [CourseController::class, 'displayclass']);
Route::delete('/gurutani/myclass/{course}', [CourseController::class, 'destroy']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/event', [EventController::class, 'displayEvent']);
Route::get('/detailevent', [DetailEventController::class, 'displayDetailEvent']);
Route::get('/community', [CommunityController::class, 'displayCommunity']);
Route::get('/detailcommunity', [DetailCommunityController::class, 'displayDetailCommunity']);