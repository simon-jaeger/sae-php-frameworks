<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Auth;
use Illuminate\Http\Request;

class TagsController {
  function index(Request $request) {
    return Auth::user()->tags()->get();
  }

  function create(Request $request) {
    $payload = $request->validate(Tag::$rules);
    $model = Auth::user()->tags()->create($payload);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = $request->validate(Tag::$rules);
    $model = Auth::user()->tags()->findOrFail($id);
    $model->fill($payload);
    $model->save();
    return $model;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $model = Auth::user()->tags()->findOrFail($id);
    $model->delete();
    return $model;
  }
}
