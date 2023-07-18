<?php

namespace App\Models;

use Illuminate\Http\Request;

/**
 * @property string $file
 * @property numeric $user_id
 */
class Picture extends Model {
  static function validate(Request $request) {
    return $request->validate([
      'file' => ['required', 'image'],
    ]);
  }
}
