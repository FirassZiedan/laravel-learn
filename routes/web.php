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
use App\Task;

Route::get('/welcome', function () {
  return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/tasks', function () {
    //$tasks = DB::table('tasks')->get();
    $tasks = Task::all();
    //return $tasks;
    return view('tasks.index' , compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
    //$tasks = DB::table('tasks')->find($id);
    $tasks = Task::find($id);
    //dd($tasks);
    return view('tasks.task' , compact('tasks'));
});
