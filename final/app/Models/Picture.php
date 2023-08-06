<?php

namespace App\Models;

use App\Base\Model;

/**
 * @property string $file
 * @property int $user_id
 */
class Picture extends Model {
  static $rules = [
    'file' => ['required', 'image', 'dimensions:max_width=2000,max_height=2000', 'max:5000'],
  ];
}
