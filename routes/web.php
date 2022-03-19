<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookAuthorController;
use App\Http\Controllers\BookController;
use App\http\Controllers\BooktypeController;

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

    Route::get('upload.html', 'AuthorCOntroller@uploadfile')->name('uploadfile');
    Route::post('post', 'AuthorCOntroller@postfile')->name('post');


Route::resource('bookauthors',BookAuthorController::class);
Route::prefix("library")->group(function (){
    Route::get('/', [BookAuthorController::class, "index"]);
    Route::get('create', [BookAuthorController::class, "create"]);
    Route::post('create',[BookAuthorController::class, 'store']);
    Route::put('update',[BookAuthorController::class,'update']);
    Route::get('edit/{id}',[BookAuthorController::class,'edit']);
    Route::get('delete/{id}',[BookAuthorController::class,'destroy']);
    Route::get('show/{id}',[BookAuthorController::class,'show']);
});


Route::resource('authors',AuthorController::class);
//Route::get('authors/delete/{id}',[AuthorController::class,"delete"])->name('authors.delete');
Route::prefix("library")->group(function (){
    Route::get('/', [AuthorController::class, "index"]);
    Route::get('create', [AuthorController::class, "create"])->name('authors.create');
    Route::post('create',[AuthorController::class, 'store']);
    Route::put('update',[AuthorController::class,'update'])->name('authors.update');
    Route::get('edit/{id}',[AuthorController::class,'edit'])->name('authors.edit');
    Route::get('delete/{id}',[AuthorController::class,'destroy']);
    Route::get('show/{id}',[AuthorController::class,'show']);
    
});

Route::resource('books',BookController::class);
Route::prefix("library")->group(function (){
    Route::get('/', [BookController::class, "index"]);
    Route::get('create', [BookController::class, "create"]);
    Route::post('create',[BookController::class, 'store']);
    Route::put('update',[BookController::class,'update']);
    Route::get('edit/{id}',[BookController::class,'edit']);
    Route::get('delete/{id}',[BookController::class,'destroy']);
    Route::get('show/{id}',[BookController::class,'show']);
});
