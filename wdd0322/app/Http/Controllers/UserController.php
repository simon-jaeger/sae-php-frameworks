<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController {


  function read() {
    return Auth::user();
  }


























//  function update(Request $request) {
//    $model = Auth::user();
//    $payload = User::validate($request);
//    $model->fill($payload);
//    if ($request->has('password'))
//      $model->password = Hash::make($model->password);
//    $model->save();
//    return $model;
//  }
//
//  function delete(Request $request) {
//    $model = Auth::user();
//    $model->delete();
//    return $model;
//  }
}