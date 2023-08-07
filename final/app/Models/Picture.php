<?php

namespace App\Models;

use App\Base\Model;

/**
 * @property string $file
 * @property int $user_id
 */
class Picture extends Model {
  static $rules = [
    'file' => ['required', 'image', 'max:5000'],
  ];
}
