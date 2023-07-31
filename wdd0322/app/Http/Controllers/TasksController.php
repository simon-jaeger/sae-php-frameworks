<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Auth;
use Illuminate\Http\Request;

class TasksController {
  function read(Request $request) {
    $query = Auth::user()->tasks();

    if ($request->has('name')) {
      $name = $request->input('name');
      $query->where('name', 'like', $name);
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
    $payload = Task::validate($request);
    $model = Auth::user()->tasks()->create($payload);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = Task::validate($request);
    $model = Auth::user()->tasks()->findOrFail($id);
    $model->fill($payload);
    $model->save();
    return $model;
  }

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Auth::user()->tasks()->findOrFail($id);
    $model->delete();
    return $model;
  }
}
