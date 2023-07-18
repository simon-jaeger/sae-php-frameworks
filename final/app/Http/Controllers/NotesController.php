<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Auth;
use Illuminate\Http\Request;

class NotesController {
  function read(Request $request) {
    return Auth::user()->notes()->get();
  }

  function create(Request $request) {
    $payload = Note::validate($request, isNew: true);
    $model = Auth::user()->notes()->create($payload);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = Note::validate($request);
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
