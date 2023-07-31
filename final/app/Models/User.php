<?php

namespace App\Models;

use App\Base\Authenticatable;
use Illuminate\Http\Request;

/**
 * @property string $email
 * @property string $password
 * @property boolean $is_admin
 */
class User extends Authenticatable {
  static $rules = [
    'email' => ['required', 'email'],
    'password' => ['sometimes', 'string', 'min:8'],
  ];

  function notes() {
    return $this->hasMany(Note::class);
  }

  function tags() {
    return $this->hasMany(Tag::class);
  }

  function tasks() {
    return $this->hasMany(Task::class);
  }

  function pictures() {
    return $this->hasMany(Picture::class);
  }
}
