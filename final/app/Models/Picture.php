<?php

namespace App\Models;

use App\Base\Model;
use Illuminate\Http\Request;

/**
 * @property string $title
 * @property string $file
 * @property int $user_id
 */
class Picture extends Model {
  static $rules = [
    'title' => ['required', 'string'],
    'file' => ['required', 'image'],
  ];
}
