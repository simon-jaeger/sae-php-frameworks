<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Lab404\Impersonate\Models\Impersonate;

/**
 * @property string $email
 * @property string $password
 * @property boolean $is_admin
 */
class User extends Model implements AuthenticatableContract {
  use Authenticatable, Impersonate;

  protected $hidden = ['password'];

  static function rules($isNew = false) {
    $requiredIfNew = $isNew ? 'required' : 'sometimes';
    return [
      'email' => [$requiredIfNew, 'email'],
      'password' => [$requiredIfNew, 'min:8'],
    ];
  }

  function notes() {
    return $this->hasMany(Note::class);
  }

  function tasks() {
    return $this->hasMany(Task::class);
  }
}
