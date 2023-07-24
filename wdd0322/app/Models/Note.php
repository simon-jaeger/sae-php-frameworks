<?php

namespace App\Models;

use Illuminate\Http\Request;

/**
 * @property string $title
 * @property string $content
 * @property numeric $user_id
 */
class Note extends Model {
  static function validate(Request $request, $isNew = false) {
    $requiredIfnew = $isNew ? 'required' : 'sometimes';
    return $request->validate([
      'title' => [$requiredIfnew, 'max:100', 'min:3'],
      'content' => [$requiredIfnew],
    ]);
  }
}
