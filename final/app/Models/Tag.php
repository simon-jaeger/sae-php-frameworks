<?php

namespace App\Models;

use App\Base\Model;

/**
 * @property string $name
 */
class Tag extends Model {
  static $rules = [
    'name' => ['required', 'string'],
  ];

  function notes() {
    return $this->belongsToMany(Note::class);
  }
}
