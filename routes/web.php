<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::group(['middleware'=>'auth:web'],function (){
    Route::get('/index',[StudentController::class, 'index'])->name("show_all");






//borrow


    Route::get('borrow/books',[StudentController::class,'borrowBooks'])->name('borrowBooks');



    Route::get('borrow/{id}',[StudentController::class,'borrow'])->name('borrowIT');


    Route::get('book/{id}',[StudentController::class,'showDetail'])->name('bookDetail');


    Route::get('back/book/{id}',[StudentController::class,'backToShelf'])->name('back');
});



Route::get('/', function () {
    return view('about');
});
