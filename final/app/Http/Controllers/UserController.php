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

  function update(Request $request) {
    $user = Auth::user();
    $payload = $request->validate(User::rules());
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
    $user->tasks()->delete();
    if ($user->isImpersonated()) $user->leaveImpersonation();
    else Auth::logout();
    return $user;
  }
}
