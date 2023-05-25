<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string $email
 * @property string $password
 */
class User extends Model implements AuthenticatableContract {
  use Authenticatable;

  protected $hidden = ['password'];

  function notes(): HasMany {
    return $this->hasMany(Note::class);
  }
}
