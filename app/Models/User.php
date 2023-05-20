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
}
