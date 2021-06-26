<?php

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

//PagesController
Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');

//Auth
Auth::routes();


//PostsController
//Route::resource('posts', 'App\Http\Controllers\PostsController');
Route::get('/posts', 'App\Http\Controllers\PostsController@index');
Route::post('/posts', 'App\Http\Controllers\PostsController@store')->name('submitForm');
Route::get('/posts/create', 'App\Http\Controllers\PostsController@create')->name('createForm');
Route::get('/posts/{id}', 'App\Http\Controllers\PostsController@show');
Route::put('/posts/{id}', 'App\Http\Controllers\PostsController@update');
Route::delete('/posts/{id}', 'App\Http\Controllers\PostsController@destroy');
Route::get('/posts/{id}/edit', 'App\Http\Controllers\PostsController@edit');

//HomeController
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//UserController
Route::get('/home/users', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/home/users/create', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/home/users', [App\Http\Controllers\UserController::class, 'store'])->name('saveUser');
Route::get('/home/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit']);
Route::put('/home/users/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/home/users/{id}/delete', [App\Http\Controllers\UserController::class, 'delete']);

//ProjectController
Route::get('/home/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('project');
Route::get('/home/projects/create', [App\Http\Controllers\ProjectController::class, 'create']);
Route::post('/home/projects', [App\Http\Controllers\ProjectController::class, 'store']);
Route::get('/home/projects/{id}', [App\Http\Controllers\ProjectController::class, 'show'])->name('show');
Route::get('/home/projects/{id}/add', [App\Http\Controllers\ProjectController::class, 'add']);
Route::post('/home/projects/{id}/add/search', [App\Http\Controllers\ProjectController::class, 'search']);
Route::get('/home/projects/{id}/edit', [App\Http\Controllers\ProjectController::class, 'edit']);
Route::put('/home/projects/{id}', [App\Http\Controllers\ProjectController::class, 'update']);
Route::get('/home/projects/{id}/delete', [App\Http\Controllers\ProjectController::class, 'destroy']);

//InspirationController
Route::get('/home/projects/inspiration/{image_info}/add',
 'App\Http\Controllers\InspirationController@create');
Route::get('/home/projects/{id}/inspiration/{image_info}/delete',
 'App\Http\Controllers\InspirationController@delete');

//Route::get('/projects/addImage/{id}/add', 'App\Http\Controllers\InspirationController@addImage');



