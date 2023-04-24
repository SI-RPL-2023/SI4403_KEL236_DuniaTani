<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DetailEventController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\DetailCommunityController;

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

// route for login register
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/event', [EventController::class, 'displayEvent']);
Route::get('/detailevent', [DetailEventController::class, 'displayDetailEvent']);
Route::get('/community', [CommunityController::class, 'displayCommunity']);
Route::get('/detailcommunity', [DetailCommunityController::class, 'displayDetailCommunity']);