<?php

use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\LendsController;
use App\Http\Controllers\Backend\StudentCatController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\SubjectController;
use App\Models\StudentCategory;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('subjects',SubjectController::class);
Route::resource('books',BookController::class);
Route::resource('categories',CategoryController::class);
Route::resource('studentcats',StudentCatController::class);
Route::resource('students',StudentController::class);
Route::resource('lends',LendsController::class);
