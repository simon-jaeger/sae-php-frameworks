<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;

class AuthController extends Controller {
  function register(Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');
    $user = User::create([
      'email' => $email,
      'password' => Hash::make($password),
    ]);
    Auth::login($user);
    return $user;
  }

  function login(Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');
    Auth::attempt([
      'email' => $email,
      'password' => $password,
    ]);
    $user = Auth::user();
    if ($user) {
      Session::regenerate();
      return $user;
    } else {
      abort(401, 'login failed');
    }
  }

  function logout() {
    $user = Auth::user();
    Auth::logout();
    Session::invalidate();
    return $user;
  }
}
