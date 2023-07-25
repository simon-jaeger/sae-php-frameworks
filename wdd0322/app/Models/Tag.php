<?php

namespace App\Models;

use Illuminate\Http\Request;

/**
 * @property string $name
 */
class Tag extends Model {
  static function validate(Request $request) {
    return $request->validate([
      'name' => ['required'],
    ]);
  }

  function notes() {
    return $this->belongsToMany(Note::class);
  }
}
