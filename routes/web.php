<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookAuthorController;

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

Route::resource('bookauthors',BookAuthorController::class);

Route::resource('authors',AuthorController::class);
Route::get('authors/delete/{id}',[AuthorController::class,"delete"])->name('authors.delete');
Route::prefix("library")->group(function (){
    Route::get('/', [AuthorController::class, "index"]);
    Route::get('create', [AuthorController::class, "create"])->name('authors.create');
    Route::post('create',[AuthorController::class, 'store']);
    Route::put('update',[AuthorController::class,'update'])->name('authors.update');
    Route::get('edit/{id}',[AuthorController::class,'edit'])->name('authors.edit');
    Route::get('delete/{id}',[AuthorController::class,'destroy']);
    Route::get('show/{id}',[AuthorController::class,'show']);
});



// Route::resource('carstores', CarstoreController::class);
// Route::get('carstores/delete/{id}', [CarstoreController::class, "delete"])->name("carstores.delete");

// Route::prefix("studentapp")->group(function () {

//     Route::get('/', [CarstoreController::class, "index"]);
//     Route::get('carstores/create', [CarstoreController::class, "create"]);
//     Route::post('create', [CarstoreController::class, "store"]);
//     Route::put('update', [CarstoreController::class, "update"]);
//     Route::get('edit/{id}', [CarstoreController::class, "edit"]);
//     Route::get('delete/{id}', [CarstoreController::class, "destroy"]);
//     Route::get('show/{id}', [CarstoreController::class, "show"]);
// });