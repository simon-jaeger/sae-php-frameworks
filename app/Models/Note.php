<?php

namespace App\Models;

/**
 * @property string $title
 * @property string $content
 * @property numeric $user_id
 */
class Note extends Model {
  static $rules = [
    'title' => ['required', 'max:255'],
    'content' => ['sometimes'],
  ];
}
