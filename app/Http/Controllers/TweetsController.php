<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller {
  function index() {
    return Tweet::all();
  }

  function create(Request $request) {
    $text = $request->input('text');
    $model = Tweet::create([
      'text' => $text,
      'done' => false,
    ]);
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $text = $request->input('text');
    $model = Tweet::findOrFail($id);
    $model->text = $text;
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
