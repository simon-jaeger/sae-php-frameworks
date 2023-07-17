<?php

namespace App\Models;

use Illuminate\Http\Request;

/**
 * @property string $title
 * @property string $content
 * @property string $color
 * @property string $summary
 * @property boolean $locked
 */
class Note extends Model {
  static function validate(Request $request, $isNew = false) {
    $requiredIfnew = $isNew ? 'required' : 'optional';
    return $request->validate([
      'title' => ['required', 'max:100', 'min:3'],
      'content' => [$requiredIfnew],
      'color' => ['optional'],
      'locked' => ['optional'],
    ]);
  }
}
