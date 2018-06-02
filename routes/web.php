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

Route::get('/', function () {
    $tasks = [
      'Go home',
      'Do you work',
      'learn More',
      'Love Wa\'ed'
    ];
    return view('home' , compact('tasks'));
});


Route::get('/welcome', function () {
    return view('welcome');
});
