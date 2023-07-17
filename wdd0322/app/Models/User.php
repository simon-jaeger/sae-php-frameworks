<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Http\Request;

/**
 * @property string $email
 * @property string $password
 */
class User extends Model implements AuthenticatableContract {
  use Authenticatable;

  protected $hidden = ['password'];

  static function validate(Request $request, $isNew = false) {
    $requiredIfNew = $isNew ? 'required' : 'sometimes';
    return $request->validate([
      'email' => [$requiredIfNew, 'email'],
      'password' => [$requiredIfNew, 'min:8'],
    ]);
  }
}














//  class User extends Model implements AuthenticatableContract {
//  use Authenticatable;

