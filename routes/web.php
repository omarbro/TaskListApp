<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
Route::get('/home',[HomeController::class,'redirectHome']);
Route::get('/addTask',[AdminController::class,'add_task_view']);
Route::post('/addTaskAdmin',[AdminController::class, 'upload_adminTask']);
Route::get('/showAdTask',[AdminController::class, 'showAdTask']);
Route::get('/deleteAdTask/{id}',[AdminController::class, 'deleteAdTask']);
Route::get('/upTaskAdmin/{id}',[AdminController::class, 'updateAdTask']);
Route::post('/editAdTask/{id}',[AdminController::class, 'editAdTask']);

Route::get('/addTaskUserView',[UserController::class,'add_task_view']);
Route::post('/addTaskUser',[UserController::class, 'upload_Task']);
Route::get('/showTask',[UserController::class, 'showTask']);
Route::get('/deleteTask/{id}',[UserController::class, 'deleteTask']);
Route::get('/upTask/{id}',[UserController::class, 'updateTask']);
Route::post('/editTask/{id}',[UserController::class, 'editTask']);

Route::get('/showUserTask',[AdminController::class, 'userTasks']);
Route::get('/upUserTaskV/{id}',[AdminController::class, 'updateUserTask']);
Route::post('/editUserTask/{id}',[AdminController::class, 'editUserTask']);
Route::get('/deleteUserTask/{id}',[UserController::class, 'deleteUserTask']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
