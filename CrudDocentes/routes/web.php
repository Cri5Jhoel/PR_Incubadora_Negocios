<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocenteController;

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
    return view('Docentes.index');
});

Route::get('/teachers', [DocenteController::class, "getTeachers"]);

Route::get('/listteachers', [DocenteController::class, "listTeachers"]);

Route::post('/teachers', [DocenteController::class, "postTeacher"]);

Route::get('/newteacher', [Docentecontroller::class, "newTeacher"]);

Route::put('/teachers', [DocenteController::class, "putTeacher"]);

Route::get('/editteacher/{id}', [DocenteController::class, "editTeacher"]);

Route::get('/teachers/{id}', [DocenteController::class, "getTeacher"]);

Route::delete('/teachers/{id}', [DocenteController::class, "deleteTeacher"]);
