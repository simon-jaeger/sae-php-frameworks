<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController {
  function read(Request $request) {
    return Auth::user();
  }

  function update(Request $request) {
    $model = Auth::user();
    $payload = User::validate($request);
    $model->fill($payload);
    if ($request->has('password'))
      $model->password = Hash::make($model->password);
    $model->save();
    return $model;
  }

  function delete(Request $request) {
    $user = Auth::user();
    $user->notes()->delete();
    $user->tags()->delete();
    $user->delete();
    return $user;
  }
}
