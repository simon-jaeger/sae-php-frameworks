<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Tag;
use Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class NotesController {
  function read(Request $request) {
    $query = Auth::user()->notes();
    if ($request->has('tagIds')) {
      $tagIds = explode(',', $request->input('tagIds'));
      $query->whereHas('tags', function (Builder $q) use ($tagIds) {
        $q->whereIn('tags.id', $tagIds);
      }, '>=', count($tagIds)); // require it to have all, leave out these two params to require only on of the tags
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
    $model->refresh(); // to return an up to date tags array
    return $model;
  }
}
