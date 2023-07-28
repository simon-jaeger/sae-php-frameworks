<?php

namespace App\Models;

use App\Base\BaseModel;
use Illuminate\Http\Request;

/**
 * @property string $name
 * @property boolean $done
 * @property numeric $prio
 * @property numeric $user_id
 */
class Task extends BaseModel {
  static $rules = [
    'name' => ['required', 'min:1', 'max:255'],
    'done' => ['required', 'boolean'],
    'prio' => ['required', 'numeric', 'min:1', 'max:10'],
  ];
}
