<?php

namespace App\Models;

use Illuminate\Http\Request;

/**
 * @property string $name
 * @property boolean $done
 * @property numeric $prio
 * @property numeric $user_id
 */
class Task extends Model {
  static function validate(Request $request, $isNew = false) {
    $requiredIfnew = $isNew ? 'required' : 'sometimes';
    return $request->validate([
      'name' => [$requiredIfnew, 'max:255'],
      'done' => ['sometimes', 'boolean'],
      'prio' => ['sometimes', 'numeric', 'min:1', 'max:10'],
    ]);
  }
}
