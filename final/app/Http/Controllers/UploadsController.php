<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Auth;
use Illuminate\Http\Request;
use Storage;

class UploadsController {
  function index(Request $request) {
    return Auth::user()->uploads()->get();
  }

  function create(Request $request) {
    $payload = $request->validate(Upload::$rules);
    $model = Auth::user()->uploads()->make($payload);
    $file = $request->file('file');
    $model->file = Storage::putFile($file);
    $model->save();
    return $model;
  }

  function destroy(Request $request) {
    $id = $request->input('id');
    $model = Auth::user()->uploads()->findOrFail($id);
    $model->delete();
    Storage::delete($model->file);
    return $model;
  }
}

