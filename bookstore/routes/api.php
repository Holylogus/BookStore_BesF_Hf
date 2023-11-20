<?php

use App\Models\Book;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('books',[Book::class,'index']);
Route::get('books/{$id}',[Book::class,'show']);
Route::post('books',[Book::class,'store']);
Route::post('books/{$id}',[Book::class,'update']);
Route::delete('books/{$id}',[Book::class,'destroy']);
