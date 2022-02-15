<?php

use App\Http\Controllers\BookController;
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

Route::get('/addBook', [BookController::class, 'addBook'])->name('addBook');
Route::get('/viewBook', [BookController::class, 'viewBook'])->name('viewBook');
Route::post('/addBookpost', [BookController::class, 'addBookpost'])->name('addBookpost');
Route::get('/update-book/{id}', [BookController::class, 'updateBook'])->name('updateBook');
Route::patch('/update/{id}', [BookController::class, 'update'])->name('update');
Route::delete('/delete/{id}',[BookController::class, 'delete'])->name('delete');
