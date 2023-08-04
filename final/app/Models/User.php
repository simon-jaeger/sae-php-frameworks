<?php

namespace App\Models;

use App\Base\Model;

/**
 * @property string $email
 * @property string $password
 * @property boolean $is_admin
 */
class User extends Model {
  static $rules = [
    'email' => ['required', 'email'],
    'password' => ['string', 'min:8'],
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

  function uploads() {
    return $this->hasMany(Upload::class);
  }
}
