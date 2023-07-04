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
    $model = Note::create([
      'title' => $title,
      'content' => $content,
    ]);
    return $model;
  }

  function update(Request $request) {
    //

  }

  function delete(Request $request) {
    //
  }
}
