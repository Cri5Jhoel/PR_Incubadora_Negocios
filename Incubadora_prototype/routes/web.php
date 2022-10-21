<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Teacher\TeacherController;

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

// Route::get('/', function () {
//     return view('welcome'); //Larevel default
// });

// Route::get('/login', function () {
//     return view('login'); 
// });

Route::get('/', function () {
    return view('/auth/login'); 
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
//Changed password
Route::get('/changePass', [App\Http\Controllers\HomeController::class, 'changePass'])->name('changePass');//Route::get('/students', [App\Http\Controllers\ProductController::class, 'getProducts'])->middleware('auth');
Route::post('/changePass', [App\Http\Controllers\HomeController::class, 'updatePass'])->name('updatePass');


// inicio rutas admin teacher

Route::get('/teachers', [TeacherController::class, "getTeachers"]);
Route::get('/teachers/{id}', [TeacherController::class, "getTeacher"]);
Route::post('/teachers', [TeacherController::class, "postTeacher"]);
Route::put('/teachers', [TeacherController::class, "putTeacher"]);
Route::delete('/teachers/{id}', [TeacherController::class, "deleteTeacher"]);


Route::get('/listteachers', [TeacherController::class, "listTeachers"]);
Route::get('/editteacher/{id}', [TeacherController::class, "editTeacher"]);
Route::get('/newteacher', [TeacherController::class, "newTeacher"]);

// fin rutas admin teacher


// Route::group(['middleware' => 'auth.admin'], function () {
//     Route::get('/admin', [App\Http\Controllers\Teacher\DashboardController::class, 'index'])->name('admin.index');
//     Route::get('/admin/teacher', [App\Http\Controllers\Admin\DashboardController::class, 'teacherList'])->name('admin.teacherList');
//     Route::get('/teams',[App\Http\Controllers\Admin\DashboardController::class, 'teams'])->name('admin.teams');
//     Route::get('/admin/progress',[App\Http\Controllers\Admin\DashboardController::class, 'progress'])->name('admin.progress');
// });

// Route::group(['middleware' => 'auth.teacher'], function () {
//     Route::get('/teacher', [App\Http\Controllers\Teacher\DashboardController::class, 'index'])->name('teacher.index');
//     Route::get('/students', [App\Http\Controllers\Teacher\DashboardController::class, 'students'])->name('teacher.students');
//     Route::get('/editStudent', [App\Http\Controllers\Teacher\DashboardController::class, 'editStudent'])->name('teacher.editStudent');
//     Route::get('/progress', [App\Http\Controllers\Teacher\DashboardController::class, 'progress'])->name('teacher.progress');
// });

// //Students
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/students', [App\Http\Controllers\Student\StudentController::class, "getStudents"]);
Route::get('/students/{id}', [App\Http\Controllers\Student\StudentController::class, "getStudent"]);
Route::post('/students', [App\Http\Controllers\Student\StudentController::class, "postStudent"]);
Route::put('/students', [App\Http\Controllers\Student\StudentController::class, "putStudent"]);
Route::delete('/students/{id}', [App\Http\Controllers\Student\StudentController::class, "deleteStudent"]);
Route::get('/myTeam/{id}', [App\Http\Controllers\Student\StudentController::class, "getTeam"]);

Route::get('/liststudents', [App\Http\Controllers\Student\StudentController::class, "listStudents"]);
Route::get('/newstudent', [App\Http\Controllers\Student\StudentController::class, "newStudent"]);
Route::get('/editstudent/{id}', [App\Http\Controllers\Student\StudentController::class, "editStudent"]);
Route::get('/myteam/{id}', [App\Http\Controllers\Student\StudentController::class, "myTeamInfo"]);
//

//Teams
Route::get('/teams', [App\Http\Controllers\Team\TeamController::class, "getTeams"]);
Route::get('/teams/{id}', [App\Http\Controllers\Team\TeamController::class, "getTeam"]);
Route::get('/teamMembers/{id}', [App\Http\Controllers\Team\TeamController::class, "getMembers"]);
Route::post('/teams', [App\Http\Controllers\Team\TeamController::class, "postTeam"]);
Route::put('/teams', [App\Http\Controllers\Team\TeamController::class, "putTeam"]);
Route::delete('/teams/{id}', [App\Http\Controllers\Team\TeamController::class, "deleteTeam"]);

Route::get('/listteams', [App\Http\Controllers\Team\TeamController::class, "listTeams"]);
Route::get('/viewteams', [App\Http\Controllers\Team\TeamController::class, "viewTeams"]);
Route::get('/newteam', [App\Http\Controllers\Team\TeamController::class, "newTeam"]);
Route::get('/editteam/{id}', [App\Http\Controllers\Team\TeamController::class, "editTeam"]);
Route::get('/teammembers/{id}', [App\Http\Controllers\Team\TeamController::class, "teamMembers"]);
//




