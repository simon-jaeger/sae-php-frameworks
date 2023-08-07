<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Picture;
use Auth;
use Illuminate\Http\Request;

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
    $payload = Picture::validate($request);
    $model = Auth::user()->pictures()->make($payload);
    $file = $request->file('file');
    $model->file = Storage::putFile($file);
    $model->save();
    return $model;
  }

  function update(Request $request) {
    $id = $request->input('id');
    $payload = Picture::validate($request);
    $model = Auth::user()->pictures()->findOrFail($id);
    Storage::delete($model->file);
    $file = $request->file('file');
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
