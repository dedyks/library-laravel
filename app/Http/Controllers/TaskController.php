<?php

namespace App\Http\Controllers;

use App\Task;

class TaskController extends Controller
{
    //
  public function index()
  {
    $tasks = Task::all();

  //  return $tasks;

  //  $tasks = DB::table('tasks')->get();

    return view('tasks.index', compact('tasks'));

  }

  public function show(Task $id)   //Task::find('wildcard')
  {
    //$task = Task::find($id);
    return $id;  

    return view('tasks.show', compact('task'));
  }
}
