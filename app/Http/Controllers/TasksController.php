<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Auth;
use Illuminate\Http\Request;

class TasksController extends Controller {
  function read(Request $request) {
    // TODO: filter, sort
    return Auth::user()->tasks()->get();
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

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Auth::user()->tasks()->findOrFail($id);
    $model->delete();
    return $model;
  }
}
