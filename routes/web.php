<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('postTable', [PostController::class, 'index'])->name('postTable');
Route::get('addPost', [PostController::class, 'create'])->name('addPost');
Route::post('insertPost', [PostController::class, 'store'])->name('insertPost');
Route::get('showPost/{id}', [PostController::class, 'show'])->name('showPost');


Route::get('editPost/{id}', [PostController::class, 'edit'])->name('editPost');
Route::put('updatePost/{id}', [PostController::class, 'update'])->name('updatePost');

Route::get('deletePost/{id}', [PostController::class, 'destroy'])->name('deletePost');
Route::get('TrashedPosts', [PostController::class, 'trashed'])->name('TrashedPosts');
Route::get('ForceDelete/{id}', [PostController::class, 'forcedelete'])->name('ForceDelete');
Route::get('RestorePosts/{id}', [PostController::class, 'restore'])->name('RestorePosts');

Route::middleware('auth')->group(function () {

    // Our resource routes
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

});