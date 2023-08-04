<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Auth;
use Illuminate\Http\Request;

class TasksController {
  function index(Request $request) {
    $query = Auth::user()->tasks();
    if ($request->has('name')) {
      $name = $request->input('name');
      $query->where('name', 'like', '%' . $name . '%');
    }
    if ($request->has('done')) {
      $done = $request->boolean('done');
      $query->where('done', '=', $done);
    }
    if ($request->has('prio')) {
      $prio = $request->input('prio');
      $query->where('prio', '>=', $prio);
      $query->orderBy('prio', 'desc');
    }
    return $query->get();
  }

  function create(Request $request) {
    $payload = $request->validate(Task::$rules);
    $model = Auth::user()->tasks()->create($payload);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = $request->validate(Task::$rules);
    $model = Auth::user()->tasks()->findOrFail($id);
    $model->fill($payload);
    $model->save();
    return $model;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $model = Auth::user()->tasks()->findOrFail($id);
    $model->delete();
    return $model;
  }
}
