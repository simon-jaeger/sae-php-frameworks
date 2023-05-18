<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller {
  function index() {
    return Todo::all();
  }

  function create(Request $request) {
    $title = $request->input('title');
    $model = Todo::create([
      'title' => $title,
      'done' => false,
    ]);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = $request->all();
    $model = Todo::findOrFail($id);
    $model->merge($payload)->save();
    return $model;
  }

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Todo::findOrFail($id);
    $model->delete();
    return $model;
  }
}
