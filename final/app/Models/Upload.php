<?php

namespace App\Models;

use App\Base\Model;

/**
 * @property string $file
 * @property int $user_id
 */
class Upload extends Model {
  static $rules = [
    'file' => ['file', 'max:10000'],
  ];
}
