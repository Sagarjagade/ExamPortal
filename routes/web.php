<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpController;



use App\Http\Controllers\questionController;
use App\Http\Controllers\ExamController;







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
//     return view('welcome');
// });

Route::group(['middleware' => ['web']], function ()
{

	 Route::get('login', [AuthController::class,'showLogin']);



    Route::post('login', [AuthController::class,'doLogin']);

    Route::get('/', [AuthController::class,'PageNotfound']);


    Route::get('logout',  [AuthController::class,'doLogout']);

    

    Route::get('not-found',  [AuthController::class,'notFound']);

    Route::get('dashboard',  [AuthController::class,'dashboard']);



    //Routes for add-employees

    Route::get('add-employee', [EmpController::class,'addEmployee']);

    Route::post('add-employee', [EmpController::class,'processEmployee']);

    Route::get('employee-manager', [EmpController::class,'showEmployee'])->name('employee_list');



 Route::get('Create-question',[questionController::class,'createquestion']);

 Route::post('Create-question',[questionController::class,'createStoreQuestion']);




 Route::get('Create_exam',[ExamController::class,'createexam']);

 Route::post('Create_exam',[ExamController::class,'createStoreExam']);

 Route::get('View_exam',[ExamController::class,'Viewexam']);

 Route::post('View_exam',[ExamController::class,'Viewexamlist']);




 Route::get('Assign_exam',[ExamController::class,'AssignExam']);

 Route::get('List_Assign_exam',[ExamController::class,'ListAssignExam']);


 Route::post('Assign_exam',[ExamController::class,'AssignStoreExam']);




 Route::get('welcome',  [AuthController::class,'welcome']);

 Route::post('welcome',  [AuthController::class,'storeExamRightAnswer']);


Route::get('FinalAllEmpRecords',[AuthController::class,'FinalPoints']);

Route::get('delete_Assign_exam/{id}',[ExamController::class,'delete_assign_exam']);




});
