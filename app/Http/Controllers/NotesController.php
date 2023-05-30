<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Auth;
use Illuminate\Http\Request;

class NotesController extends Controller {
  function read(Request $request) {
    $id = $request->input('id');
    $query = Auth::user()->notes();
    if ($id) return $query->findOrFail($id);
    else return $query->get();
  }

  function create(Request $request) {
    $payload = $request->validate(Note::$rules);
    $model = Auth::user()->notes()->create($payload);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = $request->validate(Note::$rules);
    $model = Auth::user()->notes()->findOrFail($id);
    $model->fill($payload);
    $model->save();
    return $model;
  }

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Auth::user()->notes()->findOrFail($id);
    $model->delete();
    return $model;
  }
}
