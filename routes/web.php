<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\NewCarriculamController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\RutineController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SingupController;
use App\Http\Controllers\HeadMasterController;
use App\Http\Controllers\ManagingBodyController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GenaralResultController;
use App\Http\Controllers\GenaralRutineController;
use App\Http\Controllers\VocationalResultController;
use App\Http\Controllers\VocationalRutineController;
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

Route::get('/',[HomeController::class, 'index']);
Route::get('/pages/notice',[NoticeController::class, 'index']);
Route::get('/pages/rutine',[RutineController::class, 'index']);
Route::get('/pages/result',[ResultController::class, 'index']);
Route::get('/pages/newcarriculam',[NewCarriculamController::class, 'index']);
Route::get('/pages/payment',[PaymentController::class, 'index']);
Route::get('/pages/admission',[AdmissionController::class, 'index']);
Route::get('/pages/about',[AboutController::class, 'index']);
Route::get('/pages/blogs',[BlogsController::class, 'index']);
Route::get('/pages/headmaster',[HeadMasterController::class, 'index']);
Route::get('/pages/managingbody',[ManagingBodyController::class, 'index']);
Route::get('/pages/teacher',[TeacherController::class, 'index']);
Route::get('/pages/genaralresult',[GenaralResultController::class, 'index']);
Route::get('/pages/genaralrutine',[GenaralRutineController::class, 'index']);
Route::get('/pages/vocationalresult',[VocationalResultController::class, 'index']);
Route::get('/pages/vocationalrutine',[VocationalRutineController::class, 'index']);
Route::get('/login',[LoginController::class, 'index']);
Route::get('/singup',[SingupController::class, 'index']);
