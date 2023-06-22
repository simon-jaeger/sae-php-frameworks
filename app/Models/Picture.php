<?php

namespace App\Models;

/**
 * @property string $title
 * @property string $file
 * @property numeric $user_id
 */
class Picture extends Model {
  static $rules = [
    'title' => ['required', 'max:255'],
    'file' => ['required', 'image'],
  ];
}
