<?php

namespace App\Models;

use App\Base\BaseUser;
use Illuminate\Http\Request;

/**
 * @property string $email
 * @property string $password
 * @property boolean $is_admin
 */
class User extends BaseUser {
  static $rules = [
    'email' => ['required', 'email'],
    'password' => ['sometimes', 'min:8'],
  ];

  function notes() {
    return $this->hasMany(Note::class);
  }

  function tags() {
    return $this->hasMany(Tag::class);
  }

  function pictures() {
    return $this->hasMany(Picture::class);
  }

  function tasks() {
    return $this->hasMany(Task::class);
  }
}
