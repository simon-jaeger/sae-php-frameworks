<?php

namespace App\Models;

use App\Base\BaseModel;
use Illuminate\Http\Request;

/**
 * @property string $file
 * @property numeric $user_id
 */
class Picture extends BaseModel {
  static $rules = [
    'file' => ['required', 'image'],
  ];
}
