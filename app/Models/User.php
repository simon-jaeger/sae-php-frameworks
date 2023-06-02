<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

/**
 * @property string $email
 * @property string $password
 */
class User extends Model implements AuthenticatableContract {
  use Authenticatable;

  protected $hidden = ['password'];

  static function rules($isNew = false) {
    return [
      'email' => ['required', 'email', 'unique:users'],
      'password' => [$isNew ? 'required' : 'sometimes', 'min:8'],
    ];
  }

  function notes() {
    return $this->hasMany(Note::class);
  }

  function tasks() {
    return $this->hasMany(Task::class);
  }
}
