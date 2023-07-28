<?php

namespace App\Models;

use App\Base\BaseModel;
use Illuminate\Http\Request;

/**
 * @property string $name
 */
class Tag extends BaseModel {
  static $rules = [
    'name' => ['required'],
  ];

  function notes() {
    return $this->belongsToMany(Note::class);
  }
}
