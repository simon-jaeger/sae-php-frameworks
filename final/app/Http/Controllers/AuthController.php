<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class AuthController {
  function register(Request $request) {
    if (!$request->has('password')) return abort(422, 'no password');
    $payload = $request->validate(User::$rules);
    $user = User::make($payload);
    $user->password = Hash::make($user->password);
    $user->save();
    Auth::login($user);
    return $user;
  }

  function login(Request $request) {
    $success = Auth::attempt([
      'email' => $request->input('email'),
      'password' => $request->input('password'),
    ]);
    if ($success) return Auth::user();
    else abort(401, 'login failed');
  }

  function logout() {
    $user = Auth::user();
    Auth::logout();
    return $user;
  }
}
