<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
  function register(Request $request) {
    $payload = $request->validate(User::rules(isNew: true));
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
