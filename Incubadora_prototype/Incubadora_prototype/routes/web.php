<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/teamProgress', [App\Http\Controllers\HomeController::class, 'teamProgress'])->name('teamProgress');
Route::get('/form1', [App\Http\Controllers\HomeController::class, 'form1'])->name('form1');
Route::get('/form2', [App\Http\Controllers\HomeController::class, 'form2'])->name('form2');
Route::get('/form3', [App\Http\Controllers\HomeController::class, 'form3'])->name('form3');
Route::get('/form4', [App\Http\Controllers\HomeController::class, 'form4'])->name('form4');
Route::get('/form5', [App\Http\Controllers\HomeController::class, 'form5'])->name('form5');
Route::get('/form6', [App\Http\Controllers\HomeController::class, 'form6'])->name('form6');
Route::get('/form7', [App\Http\Controllers\HomeController::class, 'form7'])->name('form7');
//Route::get('/students', [App\Http\Controllers\ProductController::class, 'getProducts'])->middleware('auth');

Route::group(['middleware' => 'auth.admin'], function () {
    Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'teacherList'])->name('admin.teacherList');
    Route::get('/teams',[App\Http\Controllers\Admin\DashboardController::class, 'teams'])->name('admin.teams');
    Route::get('/tprogress',[App\Http\Controllers\Admin\DashboardController::class, 'tprogress'])->name('admin.tprogress');
});

Route::group(['middleware' => 'auth.teacher'], function () {
    Route::get('/teacher', [App\Http\Controllers\Teacher\DashboardController::class, 'index'])->name('teacher.index');
    Route::get('/students', [App\Http\Controllers\Teacher\DashboardController::class, 'students'])->name('teacher.students');
    Route::get('/editStudent', [App\Http\Controllers\Teacher\DashboardController::class, 'editStudent'])->name('teacher.editStudent');
    Route::get('/progress', [App\Http\Controllers\Teacher\DashboardController::class, 'progress'])->name('teacher.progress');
});



