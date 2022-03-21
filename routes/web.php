<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookAuthorController;
use App\Http\Controllers\BookController;
use App\http\Controllers\BooktypeController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('upload.html', 'AuthorCOntroller@uploadfile')->name('uploadfile');
// Route::post('post', 'AuthorCOntroller@postfile')->name('post');


Route::resource('bookauthors', BookAuthorController::class);
Route::prefix("library_bookauthor")->group(function () {
    Route::get('/', [BookAuthorController::class, "index"]);
    Route::get('create', [BookAuthorController::class, "create"]);
    Route::post('create', [BookAuthorController::class, 'store']);
    Route::put('update', [BookAuthorController::class, 'update']);
    Route::get('edit/{id}', [BookAuthorController::class, 'edit']);
    Route::get('delete/{id}', [BookAuthorController::class, 'destroy']);
    Route::get('show/{id}', [BookAuthorController::class, 'show']);
});


Route::resource('authors', AuthorController::class);
Route::get('authors/delete/{id}', [AuthorController::class, "delete"])->name('authors.delete');
Route::prefix("library_author")->group(function () {
    Route::get('/', [AuthorController::class, "index"]);
    Route::get('create', [AuthorController::class, "create"])->name('authors.create');
    Route::post('create', [AuthorController::class, 'store']);
    Route::put('update', [AuthorController::class, 'update'])->name('authors.update');
    Route::get('edit/{id}', [AuthorController::class, 'edit'])->name('authors.edit');
    Route::get('delete/{id}', [AuthorController::class, 'destroy']);
    Route::get('show/{id}', [AuthorController::class, 'show']);
});

Route::resource('books', BookController::class);
Route::prefix("library_book")->group(function () {
    Route::get('/', [BookController::class, "index"]);
    Route::get('create', [BookController::class, "create"]);
    Route::post('create', [BookController::class, 'store']);
    Route::put('update', [BookController::class, 'update']);
    Route::get('edit/{id}', [BookController::class, 'edit']);
    Route::get('delete/{id}', [BookController::class, 'destroy']);
    Route::get('show/{id}', [BookController::class, 'show']);
});

Route::resource('booktypes', BooktypeController::class);
Route::prefix("library_booktypes")->group(function () {
    Route::get('/', [BooktypeController::class, "index"]);
    Route::get('create', [BooktypeController::class, "create"]);
    Route::post('create', [BooktypeController::class, 'store']);
    Route::put('update', [BooktypeController::class, 'update']);
    Route::get('edit/{id}', [BooktypeController::class, 'edit']);
    Route::get('delete/{id}', [BooktypeController::class, 'destroy']);
    Route::get('show/{id}', [BooktypeController::class, 'show']);
});

Route::resource('borrows', BorrowController::class);
Route::prefix("library_borrow")->group(function () {
    Route::get('/', [BorrowController::class, "index"]);
    Route::get('create', [BorrowController::class, "create"]);
    Route::post('create', [BorrowController::class, 'store']);
    Route::put('update', [BorrowController::class, 'update']);
    Route::get('edit/{id}', [BorrowController::class, 'edit']);
    Route::get('delete/{id}', [BorrowController::class, 'destroy']);
    Route::get('show/{id}', [BorrowController::class, 'show']);
});

Route::resource('librarians', LibrarianController::class);
Route::prefix("library_librarian")->group(function () {
    Route::get('/', [LibrarianController::class, "index"]);
    Route::get('create', [LibrarianController::class, "create"]);
    Route::post('create', [LibrarianController::class, 'store']);
    Route::put('update', [LibrarianController::class, 'update']);
    Route::get('edit/{id}', [LibrarianController::class, 'edit']);
    Route::get('delete/{id}', [LibrarianController::class, 'destroy']);
    Route::get('show/{id}', [LibrarianController::class, 'show']);
});


Route::resource('students', StudentController::class);
Route::prefix("library_student")->group(function () {
    Route::get('/', [StudentController::class, "index"]);
    Route::get('create', [StudentController::class, "create"]);
    Route::post('create', [StudentController::class, 'store']);
    Route::put('update', [StudentController::class, 'update']);
    Route::get('edit/{id}', [StudentController::class, 'edit']);
    Route::get('delete/{id}', [StudentController::class, 'destroy']);
    Route::get('show/{id}', [StudentController::class, 'show']);
});

Route::resource('returns', ReturnController::class);
Route::prefix("library_return")->group(function () {
    Route::get('/', [ReturnController::class, "index"]);
    Route::get('create', [ReturnController::class, "create"]);
    Route::post('create', [ReturnController::class, 'store']);
    Route::put('update', [ReturnController::class, 'update']);
    Route::get('edit/{id}', [ReturnController::class, 'edit']);
    Route::get('delete/{id}', [ReturnController::class, 'destroy']);
    Route::get('show/{id}', [ReturnController::class, 'show']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
