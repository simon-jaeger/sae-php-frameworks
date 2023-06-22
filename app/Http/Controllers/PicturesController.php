<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Auth;
use Illuminate\Http\Request;
use Storage;

class PicturesController {
  function read(Request $request) {
    return Auth::user()->pictures()->get();
  }

  function show(Request $request, string $id) {
    $model = Auth::user()->pictures()->findOrFail($id);
    $file = Storage::get($model->file);
    $mime = Storage::mimeType($model->file);
    return response($file)->header('Content-Type', $mime);
  }

  function create(Request $request) {
    $payload = $request->validate(Picture::$rules);
    $file = $request->file('file');
    $model = Auth::user()->pictures()->make($payload);
    $model->file = Storage::putFile($file);
    $model->save();
    return $model;
  }

  function delete(Request $request) {
    $id = $request->input('id');
    $model = Auth::user()->pictures()->findOrFail($id);
    $model->delete();
    Storage::delete($model->file);
    return $model;
  }
}