<?php

namespace App\Models;

use App\Base\Model;

/**
 * @property string $name
 * @property boolean $done
 * @property int $prio
 * @property int $user_id
 */
class Task extends Model {
  static $rules = [
    'name' => ['required', 'string', 'min:1', 'max:255'],
    'done' => ['required', 'boolean'],
    'prio' => ['required', 'integer', 'min:1', 'max:10'],
  ];
}
