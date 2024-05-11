<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('postTable', [PostController::class, 'index'])->name('postTable');
Route::get('addPost', [PostController::class, 'create'])->name('addPost');
Route::post('insertPost', [PostController::class, 'store'])->name('insertPost');
Route::get('showPost/{id}', [PostController::class, 'show'])->name('showPost');