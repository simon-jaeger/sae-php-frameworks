<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController {
  function read() {
    $user = Auth::user();
    return $user;
  }

  function update(Request $request) {
    $user = Auth::user();
    $payload = User::validate($request);
    $user->fill($payload);
    if ($request->has('password'))
      $user->password = Hash::make($user->password);
    $user->save();
    return $user;
  }

  function delete(Request $request) {
    $user = Auth::user();
    $user->delete();
    $user->notes()->delete();
    $user->tags()->delete();
    $user->tasks()->delete();
    if ($user->isImpersonated()) $user->leaveImpersonation();
    else Auth::logout();
    return $user;
  }
}
