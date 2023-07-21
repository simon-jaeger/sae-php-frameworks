<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Auth;
use Illuminate\Http\Request;

class TeamsController {
  function read(Request $request) {
    return Team::with('users')->get();
  }

  function join(Request $request) {
    $team = Team::findOrFail($request->input('id'));
    $user = Auth::user();
    $user->teams()->attach($team->id); // duplicates possible, either syncWithoutDetach or some other check
    return $user->teams()->get();
  }

  function leave(Request $request) {
    $team = Team::findOrFail($request->input('id'));
    $user = Auth::user();
    $user->teams()->detach($team->id);
    return $user->teams()->get();
  }
}
