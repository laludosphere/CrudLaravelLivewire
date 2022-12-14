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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student');
Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::view('/datatable1', 'datatable1');
Route::view('/datatable2', 'datatable2');
Route::view('/datatable3', 'datatable3');
