<?php

namespace App\Models;

/**
 * @property string $name
 * @property boolean $done
 * @property numeric $prio
 */
class Task extends Model {
  static $rules = [
    'name' => ['required', 'max:255'],
    'done' => ['required', 'boolean'],
    'prio' => ['required', 'numeric', 'min:1', 'max:10'],
  ];
}
