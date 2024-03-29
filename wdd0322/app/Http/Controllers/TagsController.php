<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Auth;
use Illuminate\Http\Request;

class TagsController {
  function read(Request $request) {
    return Auth::user()->tags()->get();
  }

  function create(Request $request) {
    $payload = Tag::validate($request);
    $model = Auth::user()->tags()->create($payload);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = Tag::validate($request);
    $model = Auth::user()->tags()->findOrFail($id);
    $model->fill($payload);
    $model->save();
    return $model;
  }

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Auth::user()->tags()->findOrFail($id);
    $model->delete();
    return $model;
  }
}
