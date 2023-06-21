<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
  function read() {
    return Auth::user();
  }

  function update(Request $request) {
    $model = Auth::user();
    $payload = $request->validate(User::rules());
    $model->fill($payload);
    if ($request->has('password'))
      $model->password = Hash::make($model->password);
    $model->save();
    return $model;
  }

  function delete(Request $request) {
    $model = Auth::user();
    $confirmed = Auth::validate([
      'email' => $model->email,
      'password' => $request->input('password'),
    ]);
    if (!$confirmed) {
      return abort(401, 'password confirmation failed');
    }
    $model->delete();
    $model->notes()->delete();
    $model->tasks()->delete();
    return $model;
  }
}
