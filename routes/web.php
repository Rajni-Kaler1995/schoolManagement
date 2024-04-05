<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/subject', [SubjectController::class, 'index'])->name('subject.index');
Route::post('/subject/create', [SubjectController::class, 'create'])->name('subject.create');

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::post('/student/create', [StudentController::class, 'create'])->name('student.create');

Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
Route::post('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);