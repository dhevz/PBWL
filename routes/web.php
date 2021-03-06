<?php

use App\Http\Controllers\PostController;
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

Route::redirect('/','blog');

Route::get('/blog', [PostController::class, 'print']);

Route::get('/posts/{id?}', [PostController::class, 'post']);

Route::get('/blog/{category?}', [PostController::class, 'print']);

