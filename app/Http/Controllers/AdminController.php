<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

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
}
