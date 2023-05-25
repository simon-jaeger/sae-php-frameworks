<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller {
  private function validate(Request $request) {
    return $request->validate([
      'title' => ['required', 'max:255'],
      'content' => ['sometimes'],
    ]);
  }

  function index() {
    return Note::all();
  }

  function create(Request $request) {
    $payload = $this->validate($request);
    $model = Note::create($payload);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = $this->validate($request);
    $model = Note::findOrFail($id);
    $model->fill($payload)->save();
    return $model;
  }

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Note::findOrFail($id);
    $model->delete();
    return $model;
  }
}
