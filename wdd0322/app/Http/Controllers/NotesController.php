<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController {
  function read(Request $request) {
    return Note::all();
  }

  function create(Request $request) {
    $payload = Note::validate($request, isNew: true);
    $model = Note::make($payload);
    if (!$model->color) {
      $hex = dechex(mt_rand(0, 15));
      $model->color = '#' . str_repeat($hex, 3);
    }
    $model->summary = substr($model->content, 0, 10) . '...';
    $model->save();
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = Note::validate($request);
    $model = Note::findOrFail($id);
    $model->fill($payload);
    $model->save();
    return $model;
  }

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Note::findOrFail($id);
    if ($model->locked) {
      return abort(403, 'cannot delete locked note');
    } else {
      $model->delete();
      return $model;
    }
  }
}
