<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller {
  function index() {
    return Tweet::all();
  }

  function create(Request $request) {
    $title = $request->input('title');
    $model = Tweet::create([
      'title' => $title,
      'done' => false,
    ]);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $title = $request->input('title');
    $done = $request->input('done');
    $model = Tweet::findOrFail($id);
    $model->title = $title;
    $model->done = $done;
    $model->save();
    return $model;
  }

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Tweet::findOrFail($id);
    $model->delete();
    return $model;
  }
}
