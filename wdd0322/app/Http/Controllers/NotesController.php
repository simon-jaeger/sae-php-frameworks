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
    $color = $request->input('color');
    $hidden = $request->input('hidden');
    $importance = $request->input('importance');
    $model = Note::create([
      'title' => $title,
      'content' => $content,
      'color' => $color,
      'hidden' => $hidden,
      'importance' => $importance,
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
