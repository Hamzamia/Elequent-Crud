<?php

use App\Http\Controllers\postController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\userPostController;
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

Route::get('/session/get', [sessionController::class, 'getSessionData'])->name('session.get');
Route::get('/session/set', [sessionController::class, 'storeSessionData'])->name('session.set');
Route::get('session/delete', [sessionController::class, 'deleteSession'])->name('session.delete');


Route::get('/posts', [postController::class, 'getAllPosts'])->name('posts.all');



Route::get('/first', function () {
    return redirect('/session/get');
});

Route::get('/add-post', [postController::class, 'addPost'])->name('post.save');

Route::post('/add-post', [postController::class, 'savePost'])->name('post.save');




Route::get('/allstudent', [studentController::class, 'allStudent']);


Route::get('/add-user-post', [userPostController::class, 'addPost'])->name('post.add');
Route::post('/add-user-post', [userPostController::class, 'saveAddPost'])->name('post.user_post');

Route::get('/get-post', [userPostController::class, 'getPosts'])->name('post.get');
Route::get('/single-post/{id}', [userPostController::class, 'getPostById'])->name('post.single');