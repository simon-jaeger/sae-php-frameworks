<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController {
  function impersonate(Request $request) {
    if (!Auth::user()->is_admin) return abort(403, 'admin only');
    $id = $request->input('id');
    $target = User::findOrFail($id);
    Auth::user()->impersonate($target);
    return $target;
  }

  function unimpersonate(Request $request) {
    Auth::user()->leaveImpersonation();
    return Auth::user();
  }

  function makeAdmin(Request $request) {
    if (!Auth::user()->is_admin) return abort(403, 'admin only');
    $id = $request->input('id');
    $target = User::findOrFail($id);
    $target->is_admin = true;
    $target->save();
    return $target;
  }

  function setPassword(Request $request) {
    if (!Auth::user()->is_admin) return abort(403, 'admin only');
    $id = $request->input('id');
    $password = $request->input('password');
    $target = User::findOrFail($id);
    $target->password = Hash::make($password);
    $target->save();
    return $target;
  }

  function stats(Request $request) {
    if (!Auth::user()->is_admin) return abort(403, 'admin only');
    return [
      'userCount' => User::count(),
      'notesCount' => Note::count(),
    ];
  }
}
