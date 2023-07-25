<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class NotesController {
  function read(Request $request) {
    $query = Auth::user()->notes();
    if ($request->has('tagIds')) {
      $tagIds = explode(',', $request->input('tagIds'));
      $min = count($tagIds); // all
      // $min = 1; // at least one
      $query->whereHas(
        'tags',
        fn(Builder $q) => $q->whereIn('tags.id', $tagIds),
        '>=',
        $min
      );
    }
    return $query->get();
  }

  function create(Request $request) {
    $payload = Note::validate($request);
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

  function setTags(Request $request) {
    $id = $request->input('id');
    $tagIds = $request->input('tagIds');
    $model = Auth::user()->notes()->findOrFail($id);
    $model->tags()->sync($tagIds);
    $model->refresh(); // to refresh tags array
    return $model;
  }
}
