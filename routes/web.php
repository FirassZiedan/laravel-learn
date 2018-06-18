<?php

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

Route::get('/welcome', function () {
  return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('tasks','tasksController@index');
Route::get('tasks/{task}','tasksController@show');



Route::get('posts', 'PostsController@index');
//Route::get('posts/{post}','PostsController@show');
Route::get('posts/create','PostsController@create');
Route::post('posts','PostsController@store');
/*
Posts 

GET /posts              /get all posts
GET /posts/create       /crate new post
POST /posts             /save new post
GET /posts/{id}/edit    /edit old post
GET /posts/{id}         /open specific post 
PATCH /posts/{id}       /save the post after edit
DELETE /posts/{id}      /delete post
*/