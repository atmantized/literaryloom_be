<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/books', [BookController::class, 'book_list']);
Route::get('/books/search', [BookController::class, 'find_book']);
Route::get('/books/category', [BookController::class, 'category_filter']);
Route::get('/books/{id}', [BookController::class, 'book_detail']);