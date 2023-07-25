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
  static function validate(Request $request) {
    $requiredIfNew = $request->isMethod('post') ? 'required' : 'sometimes';
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

  function pictures() {
    return $this->hasMany(Picture::class);
  }

  function tasks() {
    return $this->hasMany(Task::class);
  }
}
