<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller {
  function read() {
    return User::get();
  }

  function self() {
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
}
