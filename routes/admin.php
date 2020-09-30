<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;

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
//prefix  admin

Route::group(['middleware'=>'guest:admin'],function (){
    Route::get('/login',[AdminController::class,'login'])->name('adminLogin');
    Route::post('/login',[AdminController::class,'logged'])->name('admin.login');
});



Route::group(['middleware'=>'auth:admin'],function (){
    Route::get('dashboard',[AdminController::class,'dash'])->name('dash');

    Route::post('student',[DashboardController::class, 'search'])->name('search');

    Route::get('/reset-password',[AdminController::class,'resetPassword'])->name('resetPassword');
    Route::post('/reset-password',[AdminController::class,'reset'])->name('reset');
    //Book >>CRUD

    Route::resource('books', BookController::class);

    Route::get('showAll',[BookController::class, 'showAll'])->name("show_all");

    Route::get('AllStudent',[DashboardController::class, 'AllStudent'])->name("show_student");
    Route::get('books-of-student/{id}',[DashboardController::class, 'BooksOfStudent'])->name("books-of-student");

});



