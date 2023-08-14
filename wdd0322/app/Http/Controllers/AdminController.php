<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AdminController {
  function impersonate(Request $request) {
    $user = Auth::user();
    if (!$user->is_admin) return abort(403, 'not admin');
    $id = $request->input('id');
    $target = User::findOrFail($id);
    $user->impersonate($target);
    return $target;
  }

  function unimpersonate(Request $request) {
    Auth::user()->leaveImpersonation();
    return Auth::user();
  }
}
