<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class tasksController extends Controller
{
    public function index () {
      //$tasks = DB::table('tasks')->get();
      $tasks = Task::all();
      //return $tasks;
      return view('tasks.index' , compact('tasks'));
    }
    public function show ( Task $task) {// Task::find(wildcard);
      //$tasks = DB::table('tasks')->find($id);
      //$tasks = Task::find($id);
      //dd($tasks);

      //return $task;
      $tasks = $task;
      return view('tasks.task' , compact('tasks'));
    }
}
