<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Http\Request;
use Lab404\Impersonate\Models\Impersonate;

/**
 * @property string $email
 * @property string $password
 * @property boolean $is_admin
 */
class User extends Model implements AuthenticatableContract {
  use Authenticatable, Impersonate;

  protected $hidden = ['password'];

  static function validate(Request $request, $isNew = false) {
    $requiredIfNew = $isNew ? 'required' : 'sometimes';
    return $request->validate([
      'email' => [$requiredIfNew, 'email'],
      'password' => [$requiredIfNew, 'min:8'],
    ]);
  }

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
