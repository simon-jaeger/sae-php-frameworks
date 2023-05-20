<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller {
  function index() {
    return Note::all();
  }

  function create(Request $request) {
    $title = $request->input('title');
    $content = $request->input('content');
    $model = Note::create([
      'title' => $title,
      'content' => $content,
    ]);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $title = $request->input('title');
    $content = $request->input('content');
    $model = Note::findOrFail($id);
    $model->title = $title;
    $model->content = $content;
    $model->save();
    return $model;
  }

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Note::findOrFail($id);
    $model->delete();
    return $model;
  }
}
