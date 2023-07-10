<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController {
  function read(Request $request) {
    return Note::all();
  }

  function create(Request $request) {
    $title = $request->input('title');
    $content = $request->input('content');
    $model = Note::make([
      'title' => $title,
      'content' => $content,
    ]);
    $model->save();
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $title = $request->input('title');
    $content = $request->input('content');
    $model = Note::find($id);
    $model->title = $title;
    $model->content = $content;
    $model->save();
    return $model;
  }

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Note::find($id);
    $model->delete();
    return $model;
  }
}
