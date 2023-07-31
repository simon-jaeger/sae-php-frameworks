<?php

namespace App\Models;

use Illuminate\Http\Request;

/**
 * @property string $name
 * @property boolean $done
 * @property int $prio
 * @property int $user_id
 */
class Task extends Model {
  static function validate(Request $request, $isNew = false) {
    $requiredIfnew = $isNew ? 'required' : 'sometimes';
    return $request->validate([
      'name' => [$requiredIfnew, 'string', 'min:1', 'max:255'],
      'done' => ['boolean'],
      'prio' => ['integer', 'min:1', 'max:10'],
    ]);
  }
}
