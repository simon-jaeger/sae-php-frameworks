<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Auth;
use Illuminate\Http\Request;

class NotesController extends Controller {
  private $rules = [
    'title' => ['required', 'max:255'],
    'content' => ['sometimes'],
  ];

  function index() {
    return Auth::user()->notes()->get();
  }

  function create(Request $request) {
    $payload = $request->validate($this->rules);
    $model = Auth::user()->notes()->create($payload);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = $request->validate($this->rules);
    $model = Auth::user()->notes()->findOrFail($id);
    $model->fill($payload)->save();
    return $model;
  }

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Auth::user()->notes()->findOrFail($id);
    $model->delete();
    return $model;
  }
}
