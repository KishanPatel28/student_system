<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\Studentcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class,'login_action'])->name('login-action');

Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/register2',[LoginController::class,'login_student'])->name('login-student');

Route::get('/student',[Studentcontroller::class, 'index'])->name('student');

Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard',[Dashboardcontroller::class, 'index'])->name('dashboard');

    Route::get('/student',[Dashboardcontroller::class, 'student_list'])->name('students');
    Route::get('/student/edit/{id}',[Dashboardcontroller::class,'edit'])->name('edit_student');
    Route::post('/student/update',[Dashboardcontroller::class,'update'])->name('update_student');
    Route::get('/student/delete/{id}',[Dashboardcontroller::class,'delete'])->name('delete_student');

    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
});
