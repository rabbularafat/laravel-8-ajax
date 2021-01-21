<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TeacherController;

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

Route::get('/test', function () {
    echo "test";
});

Route::get('/hello', [HelloController::class, 'human']);

Route::get('/',[TeacherController::class,'index']);
Route::get('/teacher/all',[TeacherController::class,'allData']);
Route::get('/teacher/store',[TeacherController::class,'dataStore']);
Route::get('/teacher/edit/{id}',[TeacherController::class,'editData']);
Route::get('/teacher/update/{id}',[TeacherController::class,'updateData']);
Route::get('/teacher/delete/{id}',[TeacherController::class,'deleteData']);
